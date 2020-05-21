<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19 (coronavírus): Formulário de notificação</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Formulário de notificação desenvolvido com foco na comunicação de casos suspeitos/confirmados de COVID-19 (coronavírus).">
        <meta name="keywords" content="COVID-19, coronavírus, formulário de notificação, análise, sintomas, recomendação, consulta hospitalar, isolamento">
        <meta name="robots" content="all" />

        <link rel="shortcut icon" href="image/favicon.png" type="image/ico"/>
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="image/apple-touch-icon-iphone.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="image/apple-touch-icon-ipad.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="image/apple-touch-icon-iphone-retina.png"/>

        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Materialize-->
        <link type="text/css" rel="stylesheet" href="plugins/materialize/css/materialize.min.css" media="screen,projection"/>
        <!--Application style-->
        <link type="text/css" rel="stylesheet" href="application.css" rel="stylesheet" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="loading"></div>
        <main>
            <div class="container">
                <br />
                <div class="row">
                    <div class="col s12">
                        <div class="center-align">
                            <img class="main-logo" src="image/UFRJ-logo.png" alt="UFRJ" style="width: 120px;">
                            <img class="main-logo" src="image/PR4-logo.png" alt="PR4" style="width: 180px;">
                            <img class="main-logo" src="image/CTPS-logo.png" alt="CTPS" style="width: 140px;">
                        </div>
                        <div class="center">
                            <h4>COVID-19 (coronavírus): Formulário de notificação</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div id="main-content">
                            <div id="error-container" class="card-panel z-depth-3">
                                <h5>Por favor, preencha os dados corretamente:</h5>
                                <ul></ul>
                            </div>
                            <form action="{{ route('result') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8" name="covid-19-diagnosis-form" id="covid-19-diagnosis-form">
                                <input type="hidden" name="_token" value="{{ $csrf_token }}">
                                <div class="section">
                                    <h5 class="valign-wrapper"><i class="material-icons">person</i> Identificação</h5>
                                    <div class="row">
                                        <div class="col l6 s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: João da Silva" name="nome" id="nome_input" type="text">
                                                    <label for="nome_input">Nome completo</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: email@email.com" name="email" id="email_input" type="text">
                                                    <label for="email_input">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <span for="nacionalidade">Nacionalidade:</span>
                                                    <label>
                                                        <input name="nacionalidade" value="Brasileiro" type="radio" class="nacionalidade_radio" />
                                                        <span>Brasileiro</span>
                                                    </label>
                                                    <label>
                                                        <input name="nacionalidade" value="Outro" type="radio" class="nacionalidade_radio" />
                                                        <span>Outro</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 999.999.999-99" name="cpf" id="cpf_input" type="text">
                                                    <label for="cpf_input">CPF</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 31/01/2000" name="data_nascimento" id="data_nascimento_input" autocomplete="off" type="text">
                                                    <label for="data_nascimento_input">Data de nascimento</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 999999999" name="sus" id="sus_input" type="text">
                                                    <label for="sus_input">Número do cartão SUS/CNS (opcional)</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 999999999" name="siape" id="siape_input" type="text">
                                                    <label for="siape_input">SIAPE (opcional)</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <span for="sexo">Sexo:</span>
                                                    <label>
                                                        <input name="sexo" value="Masculino" type="radio" class="sexo_radio" />
                                                        <span>Masculino</span>
                                                    </label>
                                                    <label>
                                                        <input name="sexo" value="Feminimo" type="radio" class="sexo_radio" />
                                                        <span>Feminimo</span>
                                                    </label>
                                                    <label>
                                                        <input name="sexo" value="Outros" type="radio" class="sexo_radio" />
                                                        <span>Outros</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l6 s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: Maria da Silva" name="nome_mae" id="nome_mae_input" type="text">
                                                    <label for="nome_mae_input">Nome da mãe</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 21 99999 9999" name="telefone" id="telefone_input" type="text">
                                                    <label for="telefone_input">Telefone de contato</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <span for="pais_residencia">Pais de residência:</span>
                                                    <label>
                                                        <input name="pais_residencia" value="Brasil" type="radio" class="pais_radio" />
                                                        <span>Brasil</span>
                                                    </label>
                                                    <label>
                                                        <input name="pais_residencia" value="Outro" type="radio" class="pais_radio" />
                                                        <span>Outro</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 99999-999" name="cep" id="cep_input" type="text">
                                                    <label for="cep_input">CEP de residência</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: Av. das rosas 676" name="endereco" id="endereco_input" type="text">
                                                    <label for="endereco_input">Endereço completo de residência</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: Enfermeiro" name="ocupacao" id="ocupacao_input" type="text">
                                                    <label for="ocupacao_input">Ocupação/Cargo</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: Emergência do Hospital XPTO" name="ocupacao_unidade" id="ocupacao_unidade_input" type="text">
                                                    <label for="ocupacao_unidade_input">Unidade/Departamento (opcional)</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <span for="raca">Raça:</span>
                                                    <label>
                                                        <input name="raca" value="Branca" type="radio" class="raca_radio" />
                                                        <span>Branca</span>
                                                    </label>
                                                    <label>
                                                        <input name="raca" value="Negra" type="radio" class="raca_radio" />
                                                        <span>Negra</span>
                                                    </label>
                                                    <label>
                                                        <input name="raca" value="Parda" type="radio" class="raca_radio" />
                                                        <span>Parda</span>
                                                    </label>
                                                    <label>
                                                        <input name="raca" value="Amarela" type="radio" class="raca_radio" />
                                                        <span>Amarela</span>
                                                    </label>
                                                    <label>
                                                        <input name="raca" value="Indígena" type="radio" class="raca_radio" />
                                                        <span>Indígena</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    <h5 class="valign-wrapper"><i class="material-icons">assignment</i> Dados clínicos</h5>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Ex: 31/01/2000" name="data_sintoma" id="data_sintoma_input" type="text" autocomplete="off">
                                            <label for="data_sintoma_input">Data dos primeiros sintomas</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="gestacao_amamentacao">Você está grávida/gestante ou amamentando?</span>
                                            <br />
                                            <label>
                                                <input name="gestacao_amamentacao" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="gestacao_amamentacao" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="gestacao_amamentacao" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="sintomas[]">Selecione os sintomas apresentados:</span>
                                            <div class="row">
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Febre" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Febre</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Tosse" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Tosse</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dor de garganta" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Dor de garganta</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dificuldade de respirar" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Dificuldade de respirar</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dor no corpo" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Dor no corpo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Diarreia" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Diarreia</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Náusea/vômitos" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Náusea/vômitos</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Cefaleia (dor de cabeça)" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Dor de cabeça (cefaleia)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Nariz escorrendo" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Nariz escorrendo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Irritabilidade/confusão" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Irritabilidade/confusão</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Desmaio ou perda temporária de consciência" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Desmaio ou perda temporária de consciência</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Sonolência excessiva" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Sonolência excessiva</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Falta de apetite" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Falta de apetite</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Pressão persistente no tórax" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Pressão persistente no tórax</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Adinamia (fraqueza)" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Fraqueza (adinamia)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Produção de escarro" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Produção de escarro</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Calafrios" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Calafrios</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Nariz entupido" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Nariz entupido</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Olhos remelentos" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Olhos remelentos</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dificuldade para deglutir" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Dificuldade para deglutir</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Manchas vermelhas pelo corpo" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Manchas vermelhas pelo corpo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Gânglios linfáticos aumentados" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Gânglios linfáticos aumentados</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Cansaço respiratório" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Cansaço respiratório</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Coloração azulada/acinzentada da pele ou unhas" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Coloração azulada/acinzentada da pele ou unhas</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Desidratação" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Desidratação</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Coloração azulada dos lábios ou rosto" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Coloração azulada dos lábios ou rosto</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Saturação de O2 menor que 95% em ar ambiente" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Saturação de O2 menor que 95% em ar ambiente</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Outros sintomas" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Outros sintomas</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Informar sintoma(s)" disabled name="outros_sintomas" id="outros_sintomas_input" type="text" autocomplete="off">
                                            <label for="outros_sintomas_input">Outro(s) sintoma(s) (obrigatório caso tenha outros sintomas)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="doencas[]">Doenças prévias (selecionar todas doenças pertinentes):</span>
                                            <div class="row">
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Nenhuma doença prévia" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Nenhuma doença prévia</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença cardiovascular, incluindo hipertensão" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Doença cardiovascular, incluindo hipertensão</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Diabetes" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Diabetes</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença hepática" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Doença hepática</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença neurológica crônica ou neuromuscular" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Doença neurológica crônica ou neuromuscular</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Imunodeficiência" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Imunodeficiência</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Infecção pelo HIV" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Infecção pelo HIV</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença renal" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Doença renal</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença pulmonar crônica" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Doença pulmonar crônica</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Neoplasia (tumor sólido ou hematológico)" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Neoplasia (tumor sólido ou hematológico)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Obesidade" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Obesidade</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Outras doenças" type="checkbox" class="filled-in validate-checkbox" />
                                                            <span>Outras doenças</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Informar doença(s)" disabled name="outras_doencas" id="outras_doencas_input" type="text" autocomplete="off">
                                            <label for="outras_doencas_input">Outra(s) doença(s) (obrigatório caso tenha outras doenças)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    <h5 class="valign-wrapper"><i class="material-icons">flight</i> Dados de exposição e viagens</h5>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="trabalhando_atualmente">Você está trabalhando/empregado atualmente?</span>
                                            <br />
                                            <label>
                                                <input name="trabalhando_atualmente" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="trabalhando_atualmente" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="linha_frente">Você trabalha na linha de frente (e.g., profissional da saúde)?</span>
                                            <br />
                                            <label>
                                                <input name="linha_frente" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="linha_frente" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="linha_frente" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="forma_trabalho">De que forma você está realizando suas funções de trabalho?</span>
                                            <br />
                                            <label>
                                                <input name="forma_trabalho" value="Presencial" type="radio" />
                                                <span>Presencial</span>
                                            </label>
                                            <label>
                                                <input name="forma_trabalho" value="Semipresencial" type="radio" />
                                                <span>Semipresencial</span>
                                            </label>
                                            <label>
                                                <input name="forma_trabalho" value="Remoto" type="radio" />
                                                <span>Remoto</span>
                                            </label>
                                            <label>
                                                <input name="forma_trabalho" value="Estou de licença" type="radio" />
                                                <span>Estou de licença</span>
                                            </label>
                                            <label>
                                                <input name="forma_trabalho" value="Não estou trabalhando" type="radio" />
                                                <span>Não estou trabalhando</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="viagem_recente">Você realizou alguma viagem para fora do brasil nos últimos 14 dias antes do início dos sintomas?</span>
                                            <br />
                                            <label>
                                                <input name="viagem_recente" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="viagem_recente" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="quantidade_moradores">Quantas pessoas moram, incluindo você, na sua residência?</span>
                                            <br />
                                            <label>
                                                <input name="quantidade_moradores" value="Moro sozinho" type="radio" />
                                                <span>Moro sozinho(a)</span>
                                            </label>
                                            <label>
                                                <input name="quantidade_moradores" value="Duas" type="radio" />
                                                <span>Duas</span>
                                            </label>
                                            <label>
                                                <input name="quantidade_moradores" value="Três" type="radio" />
                                                <span>Três</span>
                                            </label>
                                            <label>
                                                <input name="quantidade_moradores" value="Quatro ou mais" type="radio" />
                                                <span>Quatro ou mais</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="proximidade_idoso_gestante">Você convive ou manteve contato próximo com idosos ou gestantes?</span>
                                            <br />
                                            <label>
                                                <input name="proximidade_idoso_gestante" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_idoso_gestante" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_idoso_gestante" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="proximidade_crianca">Você convive ou manteve contato próximo com criança de até 2 (dois) anos e/ou que necessitem sua assistência exclusiva em sua residência?</span>
                                            <br />
                                            <label>
                                                <input name="proximidade_crianca" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_crianca" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_crianca" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="proximidade_caso_suspeito">Você convive ou manteve contato próximo com uma pessoa que seja caso SUSPEITO de novo coronavírus (COVID-19)?</span>
                                            <br />
                                            <label>
                                                <input name="proximidade_caso_suspeito" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_caso_suspeito" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_caso_suspeito" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="proximidade_caso_confirmado">Você convive ou manteve contato próximo com uma pessoa que seja caso CONFIRMADO de novo coronavírus (COVID-19)?</span>
                                            <br />
                                            <label>
                                                <input name="proximidade_caso_confirmado" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_caso_confirmado" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_caso_confirmado" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="convive_animal_externo">Você convive com animal de estimação que passeia nas ruas (cachorro, gato, dentre outros)?</span>
                                            <br />
                                            <label>
                                                <input name="convive_animal_externo" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="convive_animal_externo" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="proximidade_animais">Você manteve contato próximo com animais em áreas afetadas?</span>
                                            <br />
                                            <label>
                                                <input name="proximidade_animais" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_animais" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="proximidade_animais" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="carrinho_feira">Você faz uso de algum tipo de carrinho de feira ou sacola com rodinhas para trazer as compras do mercado ou da feira?</span>
                                            <br />
                                            <label>
                                                <input name="carrinho_feira" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="carrinho_feira" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="carro_particular">Você utiliza carro particular para apoiar seu deslocamento?</span>
                                            <br />
                                            <label>
                                                <input name="carro_particular" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="carro_particular" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="estacionamento_publico_coletivo">Você utiliza estacionamento público ou coletivo?</span>
                                            <br />
                                            <label>
                                                <input name="estacionamento_publico_coletivo" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="estacionamento_publico_coletivo" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    <h5 class="valign-wrapper"><i class="material-icons">local_hospital</i> Atendimento especializado</h5>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="diagnostico_formal">Você foi diagnosticado formalmente por algum profissional de saúde com o novo coronavírus (COVID-19)?</span>
                                            <br />
                                            <label>
                                                <input name="diagnostico_formal" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="diagnostico_formal" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Ex: Hospital XPTO" name="diagnostico_unidade" id="diagnostico_unidade_input" disabled type="text">
                                            <label for="diagnostico_unidade_input">Unidade de saúde do atendimento (opcional)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="historico_internacao">Você ficou internado?</span>
                                            <br />
                                            <label>
                                                <input name="historico_internacao" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="historico_internacao" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Ex: 5" name="internacao_dias" id="internacao_dias_input" disabled type="text">
                                            <label for="internacao_dias_input">Quantos dias você ficou internado? (opcional)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="exames_internacao[]">Quais exames você fez durante sua internação? (opcional)</span>
                                            <div class="row">
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="exames_internacao[]" value="Raio X" type="checkbox" class="filled-in" />
                                                            <span>Raio X</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="exames_internacao[]" value="Tomografia" type="checkbox" class="filled-in" />
                                                            <span>Tomografia</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="anexo_raiox_container" style="display: none;">
                                        <div class="col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Raio X</span>
                                                    <input id="anexo_raiox" name="anexo_raiox" type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input id="anexo_raiox_text" class="file-path" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="anexo_tomografia_container" style="display: none;">
                                        <div class="col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Tomografia</span>
                                                    <input id="anexo_tomografia" name="anexo_tomografia" type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input id="anexo_tomografia_text" class="file-path" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="intubado_container">
                                        <div class="row">
                                            <div class="col s12">
                                                <span for="historico_intubacao">Você foi intubado durante sua internação? (obrigatório caso de internação)</span>
                                                <br />
                                                <label>
                                                    <input name="historico_intubacao" value="Sim" type="radio" />
                                                    <span>Sim</span>
                                                </label>
                                                <label>
                                                    <input name="historico_intubacao" value="Não" type="radio" />
                                                    <span>Não</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Ex: 5" name="intubacao_dias" id="intubacao_dias_input" disabled type="text">
                                                <label for="intubacao_dias_input">Quantos dias de intubação? (opcional)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hemodialise_container">
                                        <div class="row">
                                            <div class="col s12">
                                                <span for="historico_hemodialise">Você fez hemodiálise durante sua internação? (obrigatório caso de internação)</span>
                                                <br />
                                                <label>
                                                    <input name="historico_hemodialise" value="Sim" type="radio" />
                                                    <span>Sim</span>
                                                </label>
                                                <label>
                                                    <input name="historico_hemodialise" value="Não" type="radio" />
                                                    <span>Não</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Ex: 5" name="hemodialise_dias" id="hemodialise_dias_input" disabled type="text">
                                                <label for="hemodialise_dias_input">Quantos dias de hemodiálise? (opcional)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="historico_testagem">Você fez alguma testagem para o novo coronavírus (COVID-19)?</span>
                                            <br />
                                            <label>
                                                <input name="historico_testagem" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="historico_testagem" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="tipos_testagem[]">Qual teste para o novo coronavírus (COVID-19) você fez? (obrigatório caso tenha realizado testagem)</span>
                                            <div class="row">
                                                <div class="col l4 s12">
                                                    <p>
                                                        <label>
                                                            <input name="tipos_testagem[]" value="Teste Swab PCR" type="checkbox" class="filled-in" />
                                                            <span>Teste Swab PCR</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l4 s12">
                                                    <p>
                                                        <label>
                                                            <input name="tipos_testagem[]" value="Teste rápido" type="checkbox" class="filled-in" />
                                                            <span>Teste rápido</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l4 s12">
                                                    <p>
                                                        <label>
                                                            <input name="tipos_testagem[]" value="Dosagem IGM/IGG" type="checkbox" class="filled-in" />
                                                            <span>Dosagem IGM/IGG</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="anexo_swab_pcr_container" style="display: none;">
                                        <div class="col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Teste Swab PCR</span>
                                                    <input id="anexo_swab_pcr" name="anexo_swab_pcr" type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="anexo_teste_rapido_container" style="display: none;">
                                        <div class="col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Teste rápido</span>
                                                    <input id="anexo_teste_rapido" name="anexo_teste_rapido" type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input id="anexo_teste_rapido_text" class="file-path" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="anexo_dosagem_igmigg_container" style="display: none;">
                                        <div class="col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Dosagem IGM/IGG</span>
                                                    <input id="anexo_dosagem_igmigg" name="anexo_dosagem_igmigg" type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input id="anexo_dosagem_igmigg_text" class="file-path" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="necessidade_especifica">Alguma necessidade específica foi identificada durante o atendimento?</span>
                                            <br />
                                            <label>
                                                <input name="necessidade_especifica" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="necessidade_especifica" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Ex: Atendimento psicossocial" name="necessidade_descricao" id="necessidade_descricao_input" disabled type="text">
                                            <label for="necessidade_descricao_input">Quais necessidades? (opcional)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="isolamento_social">Você está em isolamento/distânciamento social?</span>
                                            <br />
                                            <label>
                                                <input name="isolamento_social" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="isolamento_social" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Ex: 5" name="isolamento_dias" id="isolamento_dias_input" disabled type="text">
                                            <label for="isolamento_dias_input">Dias de isolamento (opcional)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="estado_atual">Como você está atualmente?</span>
                                            <br />
                                            <label>
                                                <input name="estado_atual" value="Recuperado" type="radio" />
                                                <span>Recuperado</span>
                                            </label>
                                            <label>
                                                <input name="estado_atual" value="Parcialmente recuperado" type="radio" />
                                                <span>Parcialmente recuperado</span>
                                            </label>
                                            <label>
                                                <input name="estado_atual" value="Óbito" type="radio" />
                                                <span>Óbito</span>
                                            </label>
                                            <label>
                                                <input name="estado_atual" value="Não fui diagnosticado" type="radio" />
                                                <span>Não fui diagnosticado</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div>
                                    <div class="row">
                                        <div class="col m6 s12 center-align">
                                            <button id="covid-19-diagnosis-form-reset" class="waves-effect waves-light btn-large" type="button">Limpar os dados</button>
                                            <div class="show-on-small">
                                                <br />
                                            </div>
                                        </div>
                                        <div class="col m6 s12 center-align">
                                            <button class="waves-effect waves-light btn-large" type="submit" name="action">
                                                Enviar os dados
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12"><h4>Parceiros</h4></div>
                    <div class="col s12">
                        <div class="center-align">
                            <a href="http://labnet.nce.ufrj.br/">
                                <img class="responsive-img" src="image/logo-labnet.jpeg" alt="LabNet" title="LabNet" style="max-width: 100px;">
                            </a>
                            <a href="https://coppe.ufrj.br/">
                                <img class="responsive-img" src="image/logo-coppe.png" alt="COPPE" title="COPPE" style="max-width: 120px; margin-left: 25px;">
                            </a>
                            <a href="https://www.cos.ufrj.br/">
                                <img class="responsive-img" src="image/logo-pesc.png" alt="PESC" title="PESC" style="max-width: 120px; margin-left: 25px;">
                            </a>
                            <a href="http://lens.cos.ufrj.br/es/">
                                <img class="responsive-img" src="image/logo-lens.gif" alt="LENS" title="LENS" style="max-width: 250px; margin-left: 25px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer light-blue darken-3">
            <div class="container">
                <div class="row">
                    <div class="col s6">
                        <h5 class="white-text">COVID-19 (coronavírus): Formulário de notificação</h5>
                        <p class="grey-text text-lighten-4">Formulário de notificação desenvolvido com foco na comunicação de casos suspeitos/confirmados de COVID-19 (coronavírus).</p>
                    </div>
                    <div class="col offset-s2 s4">
                        <h5 class="white-text">Links úteis</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="https://coronavirus.saude.gov.br/">O que é COVID-19 (coronavírus)?</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.who.int/health-topics/coronavirus">OMS COVID-19 (coronavírus)</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.bing.com/covid">Bing COVID-19 Tracker</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2020, enfrentamento à COVID-19 (coronavírus).
                </div>
            </div>
        </footer>

        <!--jQuery 3.1.1 -->
        <script type="text/javascript" src="plugins/jquery/jquery-3.1.1.js"></script>

        <!--Materialize-->
        <script type="text/javascript" src="plugins/materialize/js/materialize.min.js"></script>

        <!--jQuery Validation Plugin-->
        <script type="text/javascript" src="plugins/jquery-validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="plugins/jquery-validation/additional-methods.min.js"></script>

        <!--Cleave.js-->
        <script type="text/javascript" src="plugins/cleave/cleave.min.js"></script>
        <script type="text/javascript" src="plugins/cleave/addons/cleave-phone.i18n.js"></script>

        <!--Application scripts-->
        <script type="text/javascript" src="application.js"></script>
    </body>
</html>
