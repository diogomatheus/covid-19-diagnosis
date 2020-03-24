<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    
    /**
     * Present the covid-19 diagnosis form.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        return view('form')->with('csrf_token', $request->session()->get('_token'));
    }

    /**
     * Store the covid-19 form data.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:100',
            'nacionalidade' => 'required',
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'nome_mae' => 'required|max:100',
            'pais_residencia' => 'required',
            'cep' => 'required',
            'endereco' => 'required|max:255',
            'ocupacao' => 'required',
            'data_sintoma' => 'required',
            'sintomas' => 'required',
            'historico_viagem' => 'required',
            'contato_suspeito' => 'required',
            'contato_confirmado' => 'required',
            'contato_animal' => 'required',
            'historico_unidade_saude' => 'required',
            'carrinho_sacola_roda' => 'required',
            'convivencia_crianca' => 'required',
            'animal_estimacao' => 'required',
            'carro_particular' => 'required',
            'garagem_residencial' => 'required',
            'contato_idoso_gestante' => 'required',
        ]);
        
        DB::insert(
            'INSERT INTO public.diagnostico 
            (
                nome,
                nacionalidade,
                cpf,
                data_nascimento,
                sexo,
                nome_mae,
                pais_residencia,
                cep,
                endereco,
                ocupacao,
                data_sintoma,
                sintoma_apresentado,
                doenca_previa,
                historico_viagem,
                contato_suspeito,
                contato_confirmado,
                contato_animal,
                historico_unidade_saude,
                carrinho_sacola_roda,
                convivencia_crianca,
                animal_estimacao,
                carro_particular,
                garagem_residencial,
                contato_idoso_gestante,
                data_diagnostico
            ) 
            values 
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now())',
            [
                $request->input('nome'),
                $request->input('nacionalidade'),
                $request->input('cpf'),
                date_format(date_create_from_format('d/m/Y', $request->input('data_nascimento')), 'Y-m-d'),
                ($request->input('sexo') == 'Masculino') ? 'M' : 'F',
                $request->input('nome_mae'),
                $request->input('pais_residencia'),
                $request->input('cep'),
                $request->input('endereco'),
                $request->input('ocupacao'),
                date_format(date_create_from_format('d/m/Y', $request->input('data_sintoma')), 'Y-m-d'),
                str_replace(['[', ']'], ['{', '}'], json_encode($request->input('sintomas'), JSON_UNESCAPED_UNICODE)),
                str_replace(['[', ']'], ['{', '}'], json_encode($request->input('doencas'), JSON_UNESCAPED_UNICODE)),
                ($request->input('historico_viagem') == 'Não sei') ? null : (($request->input('historico_viagem') == 'Sim') ? 'S' : 'N'),
                ($request->input('contato_suspeito') == 'Não sei') ? null : (($request->input('contato_suspeito') == 'Sim') ? 'S' : 'N'),
                ($request->input('contato_confirmado') == 'Não sei') ? null : (($request->input('contato_confirmado') == 'Sim') ? 'S' : 'N'),
                ($request->input('contato_animal') == 'Não sei') ? null : (($request->input('contato_animal') == 'Sim') ? 'S' : 'N'),
                ($request->input('historico_unidade_saude') == 'Não sei') ? null : (($request->input('historico_unidade_saude') == 'Sim') ? 'S' : 'N'),
                ($request->input('carrinho_sacola_roda') == 'Não sei') ? null : (($request->input('carrinho_sacola_roda') == 'Sim') ? 'S' : 'N'),
                ($request->input('convivencia_crianca') == 'Não sei') ? null : (($request->input('convivencia_crianca') == 'Sim') ? 'S' : 'N'),
                ($request->input('animal_estimacao') == 'Não sei') ? null : (($request->input('animal_estimacao') == 'Sim') ? 'S' : 'N'),
                ($request->input('carro_particular') == 'Não sei') ? null : (($request->input('carro_particular') == 'Sim') ? 'S' : 'N'),
                ($request->input('garagem_residencial') == 'Não sei') ? null : (($request->input('garagem_residencial') == 'Sim') ? 'S' : 'N'),
                ($request->input('contato_idoso_gestante') == 'Não sei') ? null : (($request->input('contato_idoso_gestante') == 'Sim') ? 'S' : 'N')
            ]
        );

        return response()->json(['message' => 'Success'], 200);
    }

}
