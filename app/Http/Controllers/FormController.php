<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class FormController extends Controller
{
    
    /**
     * Present the covid-19 notification form.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        return view('form')->with('csrf_token', $request->session()->get('_token'));
    }

    /**
     * Analyze the covid-19 form data and display the result.
     *
     * @return Response
     */
    public function result(Request $request)
    {
        // Validate form data
        $this->validateFormData($request);

        // Store form data
        $this->storeFormData($request);

        // Display result
        return view('result');
    }

    /**
     * Validate form data.
     */
    private function validateFormData(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:100',
            'email' => 'required|max:255',
            'nacionalidade' => 'required|max:50',
            'cpf' => 'required|max:50',
            'data_nascimento' => 'required|max:50',
            'sus' => 'max:50',
            'siape' => 'max:50',
            'sexo' => 'required|max:50',
            'nome_mae' => 'required|max:100',
            'telefone' => 'required|max:50',
            'pais_residencia' => 'required|max:50',
            'cep' => 'required|max:50',
            'endereco' => 'required|max:255',
            'ocupacao' => 'required|max:100',
            'ocupacao_unidade' => 'max:100',
            'raca' => 'required|max:50',
            'data_sintoma' => 'required',
            'gestacao_amamentacao' => 'required',
            'sintomas' => 'required',
            'outros_sintomas' => 'max:255',
            'doencas' => 'required',
            'outras_doencas' => 'max:255',
            'trabalhando_atualmente' => 'required',
            'linha_frente' => 'required',
            'forma_trabalho' => 'required|max:50',
            'viagem_recente' => 'required',
            'quantidade_moradores' => 'required|max:50',
            'proximidade_idoso_gestante' => 'required',
            'proximidade_crianca' => 'required',
            'proximidade_caso_suspeito' => 'required',
            'proximidade_caso_confirmado' => 'required',
            'convive_animal_externo' => 'required',
            'proximidade_animais' => 'required',
            'carrinho_feira' => 'required',
            'carro_particular' => 'required',
            'estacionamento_publico_coletivo' => 'required',
            'diagnostico_formal' => 'required',
            'diagnostico_unidade' => 'max:100',
            'historico_internacao' => 'required',
            'anexo_raiox' => 'mimes:jpeg,jpg,png,pdf',
            'anexo_tomografia' => 'mimes:jpeg,jpg,png,pdf',
            'historico_testagem' => 'required',
            'anexo_swab_pcr' => 'mimes:jpeg,jpg,png,pdf',
            'anexo_teste_rapido' => 'mimes:jpeg,jpg,png,pdf',
            'anexo_dosagem_igmigg' => 'mimes:jpeg,jpg,png,pdf',
            'necessidade_especifica' => 'required',
            'necessidade_descricao' => 'max:255',
            'isolamento_social' => 'required',
            'estado_atual' => 'required|max:50'
        ]);
    }

    /**
     * Store form data
     */
    private function storeFormData(Request $request)
    {
        // Store uploaded files if exists
        $anexo_raiox = $this->storeFile($request, 'anexo_raiox');
        $anexo_tomografia = $this->storeFile($request, 'anexo_tomografia');
        $anexo_swab_pcr = $this->storeFile($request, 'anexo_swab_pcr');
        $anexo_teste_rapido = $this->storeFile($request, 'anexo_teste_rapido');
        $anexo_dosagem_igmigg = $this->storeFile($request, 'anexo_dosagem_igmigg');

        // Storage form data in the database
        DB::insert(
            'INSERT INTO public.notificacao 
            (
                nome,
                email,
                nacionalidade,
                cpf,
                data_nascimento,
                sus,
                siape,
                sexo,
                nome_mae,
                telefone,
                pais_residencia,
                cep,
                endereco,
                ocupacao,
                ocupacao_unidade,
                raca,
                data_sintoma,
                gestacao_amamentacao,
                sintomas,
                outros_sintomas,
                doencas,
                outras_doencas,
                trabalhando_atualmente,
                linha_frente,
                forma_trabalho,
                viagem_recente,
                quantidade_moradores,
                proximidade_idoso_gestante,
                proximidade_crianca,
                proximidade_caso_suspeito,
                proximidade_caso_confirmado,
                convive_animal_externo,
                proximidade_animais,
                carrinho_feira,
                carro_particular,
                estacionamento_publico_coletivo,
                diagnostico_formal,
                diagnostico_unidade,
                historico_internacao,
                internacao_dias,
                exames_internacao,
                anexo_raiox,
                anexo_tomografia,
                historico_intubacao,
                intubacao_dias,
                historico_hemodialise,
                hemodialise_dias,
                historico_testagem,
                tipos_testagem,
                anexo_swab_pcr,
                anexo_teste_rapido,
                anexo_dosagem_igmigg,
                necessidade_especifica,
                necessidade_descricao,
                isolamento_social,
                isolamento_dias,
                estado_atual
            )
            values 
            (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )',
            [
                // Identificação
                $request->input('nome'),
                $request->input('email'),
                $request->input('nacionalidade'),
                $request->input('cpf'),
                $this->formatDate($request, 'data_nascimento'),
                $request->input('sus', null),
                $request->input('siape', null),
                $request->input('sexo'),
                $request->input('nome_mae'),
                $request->input('telefone'),
                $request->input('pais_residencia'),
                $request->input('cep'),
                $request->input('endereco'),
                $request->input('ocupacao'),
                $request->input('ocupacao_unidade', null),
                $request->input('raca'),
                // Dados clínicos
                $this->formatDate($request, 'data_sintoma'),
                $this->formatBasicRadioButton($request, 'gestacao_amamentacao'),
                $this->formatCheckbox($request, 'sintomas'),
                $request->input('outros_sintomas', null),
                $this->formatCheckbox($request, 'doencas'),
                $request->input('outras_doencas', null),
                // Dados de exposição e viagens
                $this->formatBasicRadioButton($request, 'trabalhando_atualmente'),
                $this->formatBasicRadioButton($request, 'linha_frente'),
                $request->input('forma_trabalho'),
                $this->formatBasicRadioButton($request, 'viagem_recente'),
                $request->input('quantidade_moradores'),
                $this->formatBasicRadioButton($request, 'proximidade_idoso_gestante'),
                $this->formatBasicRadioButton($request, 'proximidade_crianca'),
                $this->formatBasicRadioButton($request, 'proximidade_caso_suspeito'),
                $this->formatBasicRadioButton($request, 'proximidade_caso_confirmado'),
                $this->formatBasicRadioButton($request, 'convive_animal_externo'),
                $this->formatBasicRadioButton($request, 'proximidade_animais'),
                $this->formatBasicRadioButton($request, 'carrinho_feira'),
                $this->formatBasicRadioButton($request, 'carro_particular'),
                $this->formatBasicRadioButton($request, 'estacionamento_publico_coletivo'),
                // Atendimento especializado
                $this->formatBasicRadioButton($request, 'diagnostico_formal'),
                $request->input('diagnostico_unidade', null),
                $this->formatBasicRadioButton($request, 'historico_internacao'),
                $this->formatInteger($request, 'internacao_dias'),
                $this->formatCheckbox($request, 'exames_internacao'),
                $anexo_raiox,
                $anexo_tomografia,
                $this->formatBasicRadioButton($request, 'historico_intubacao'),
                $this->formatInteger($request, 'intubacao_dias'),
                $this->formatBasicRadioButton($request, 'historico_hemodialise'),
                $this->formatInteger($request, 'hemodialise_dias'),
                $this->formatBasicRadioButton($request, 'historico_testagem'),
                $this->formatCheckbox($request, 'tipos_testagem'),
                $anexo_swab_pcr,
                $anexo_teste_rapido,
                $anexo_dosagem_igmigg,
                $this->formatBasicRadioButton($request, 'necessidade_especifica'),
                $request->input('necessidade_descricao', null),
                $this->formatBasicRadioButton($request, 'isolamento_social'),
                $this->formatInteger($request, 'isolamento_dias'),
                $request->input('estado_atual')
            ]
        );
    }

    /**
     * Store file input data, if exists.
     *
     * @return string
     */
    private function storeFile(Request $request, $parameter_name)
    {
        if (!$request->hasFile($parameter_name) || !$request->file($parameter_name)->isValid())
            return null;

        $file = $request->file($parameter_name);
        $filename = null;
        do {
            $uuid = Uuid::uuid4();
            $extension = $file->extension();
            $filename = $uuid->toString() . '.' . $extension;
        } while (Storage::exists('upload/' . $filename));
        $file->storeAs('upload', $filename);
        
        return $filename;
    }

    /**
     * Format date input data.
     *
     * @return date
     */
    private function formatDate(Request $request, $parameter_name)
    {
        return date_format(date_create_from_format('d/m/Y', $request->input($parameter_name)), 'Y-m-d');
    }

    /**
     * Format basic radio button input data.
     *
     * @return string
     */
    private function formatBasicRadioButton(Request $request, $parameter_name)
    {
        $value = $request->input($parameter_name);
        if($value === null || $value == 'Não sei')
            return null;

        return $value === 'Sim' ? 'S' : 'N';
    }

    /**
     * Format checkbox input data.
     *
     * @return array
     */
    private function formatCheckbox(Request $request, $parameter_name)
    {
        return str_replace(
            ['[', ']'], ['{', '}'],
            json_encode($request->input($parameter_name, []), JSON_UNESCAPED_UNICODE)
        );
    }

    /**
     * Format integer input data.
     *
     * @return int
     */
    private function formatInteger(Request $request, $parameter_name)
    {
        $value = $request->input($parameter_name);
        if($value === null)
            return null;

        return intval($value);
    }

}
