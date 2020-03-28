<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19 (coronavírus): Formulário de autonotificação</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Formulário de autonotificação desenvolvido para analisar os sintomas reportado pelo usuário com o objetivo de recomendar ações visando o combate à COVID-19 (coronavírus).">
        <meta name="keywords" content="COVID-19, coronavírus, formulário de autonotificação, análise, sintomas, recomendação, consulta hospitalar, isolamento">
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
        <link type="text/css" rel="stylesheet" href="style.css" rel="stylesheet" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav class="light-blue darken-3">
                <div class="nav-wrapper">
                    <a href="{{ config('app.url') }}" class="brand-logo center">COVID-19</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <br />
                <div class="row">
                    <div class="col s12">
                        <div class="center">
                            <img class="main-logo" src="image/logo-prefeitura.png" alt="Prefeitura da Cidade do Rio de Janeiro">
                            <img class="main-logo" src="image/ufrj-100-anos-azul-horizontal.svg" alt="UFRJ">
                        </div>
                        <div class="center">
                            <h4>COVID-19 (coronavírus): Formulário de autonotificação</h4>
                        </div>
                        <div id="service-notes" class="center-align">
                            <p>Esse serviço não substitui uma avaliação realizada por um profissional de saúde.</p>
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
                            <form action="" method="post" accept-charset="utf-8" name="covid-19-diagnosis-form" id="covid-19-diagnosis-form">
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
                                                    <input placeholder="Ex: 999999999999999" name="sus" id="sus_input" type="text">
                                                    <label for="sus_input">Número do cartão SUS (CNS)</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="Ex: 31/01/2000" name="data_nascimento" id="data_nascimento_dp" autocomplete="off" type="text" class="datepicker">
                                                    <label for="data_nascimento_dp">Data de nascimento</label>
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
                                                    <select id="ocupacao" name="ocupacao">
                                                        <option value="">Selecione uma opção</option>
                                                        <option value="Profissional de saúde">Profissional de saúde</option>
                                                        <option value="Estudante da área de saúde">Estudante da área de saúde</option>
                                                        <option value="Profissional de laboratório">Profissional de laboratório</option>
                                                        <option value="Trabalha em contato com animais">Trabalha em contato com animais</option>
                                                        <option value="Outros">Outros</option>
                                                    </select>
                                                    <label for="ocupacao">Qual é a sua ocupação?</label>
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
                                            <input placeholder="Ex: 31/01/2000" name="data_sintoma" id="data_sintoma_dp" type="text" autocomplete="off" class="datepicker">
                                            <label for="data_sintoma_dp">Data dos primeiros sintomas</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="sintomas[]">Selecione os sintomas apresentados:</span>
                                            <div class="row">
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Febre" type="checkbox" class="filled-in" />
                                                            <span>Febre</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Tosse" type="checkbox" class="filled-in" />
                                                            <span>Tosse</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dor de garganta" type="checkbox" class="filled-in" />
                                                            <span>Dor de garganta</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dificuldade de respirar" type="checkbox" class="filled-in" />
                                                            <span>Dificuldade de respirar</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dor no corpo" type="checkbox" class="filled-in" />
                                                            <span>Dor no corpo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Diarreia" type="checkbox" class="filled-in" />
                                                            <span>Diarreia</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Náusea/vômitos" type="checkbox" class="filled-in" />
                                                            <span>Náusea/vômitos</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Cefaleia (dor de cabeça)" type="checkbox" class="filled-in" />
                                                            <span>Cefaleia (dor de cabeça)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Nariz escorrendo" type="checkbox" class="filled-in" />
                                                            <span>Nariz escorrendo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Irritabilidade/confusão" type="checkbox" class="filled-in" />
                                                            <span>Irritabilidade/confusão</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Adinamia (fraqueza)" type="checkbox" class="filled-in" />
                                                            <span>Adinamia (fraqueza)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Produção de escarro" type="checkbox" class="filled-in" />
                                                            <span>Produção de escarro</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Calafrios" type="checkbox" class="filled-in" />
                                                            <span>Calafrios</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Nariz entupido" type="checkbox" class="filled-in" />
                                                            <span>Nariz entupido</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Olhos remelentos" type="checkbox" class="filled-in" />
                                                            <span>Olhos remelentos</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Dificuldade para deglutir" type="checkbox" class="filled-in" />
                                                            <span>Dificuldade para deglutir</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Manchas vermelhas pelo corpo" type="checkbox" class="filled-in" />
                                                            <span>Manchas vermelhas pelo corpo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Gânglios linfáticos aumentados" type="checkbox" class="filled-in" />
                                                            <span>Gânglios linfáticos aumentados</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Cansaço respiratório" type="checkbox" class="filled-in" />
                                                            <span>Cansaço respiratório</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="sintomas[]" value="Outros" type="checkbox" class="filled-in" />
                                                            <span>Outros</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="doencas[]">Doenças prévias (selecionar todas doenças pertinentes):</span>
                                            <div class="row">
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença cardiovascular, incluindo hipertensão" type="checkbox" class="filled-in" />
                                                            <span>Doença cardiovascular, incluindo hipertensão</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Diabetes" type="checkbox" class="filled-in" />
                                                            <span>Diabetes</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença hepática" type="checkbox" class="filled-in" />
                                                            <span>Doença hepática</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença neurológica crônica ou neuromuscular" type="checkbox" class="filled-in" />
                                                            <span>Doença neurológica crônica ou neuromuscular</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Imunodeficiência" type="checkbox" class="filled-in" />
                                                            <span>Imunodeficiência</span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <div class="col l6 s12">
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Infecção pelo HIV" type="checkbox" class="filled-in" />
                                                            <span>Infecção pelo HIV</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença renal" type="checkbox" class="filled-in" />
                                                            <span>Doença renal</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Doença pulmonar crônica" type="checkbox" class="filled-in" />
                                                            <span>Doença pulmonar crônica</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input name="doencas[]" value="Neoplasia (tumor sólido ou hematológico)" type="checkbox" class="filled-in" />
                                                            <span>Neoplasia (tumor sólido ou hematológico)</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    <h5 class="valign-wrapper"><i class="material-icons">flight</i> Dados de exposição e viagens</h5>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="historico_viagem">Você realizou alguma viagem para fora do brasil nos últimos 14 dias antes do início dos sintomas?</span>
                                            <br />
                                            <label>
                                                <input name="historico_viagem" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="historico_viagem" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="historico_viagem" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="contato_suspeito">Você teve contato próximo com uma pessoa que seja caso SUSPEITO de novo coronavírus (COVID-19)?</span>
                                            <br />
                                            <label>
                                                <input name="contato_suspeito" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="contato_suspeito" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="contato_suspeito" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="contato_confirmado">Você teve contato próximo com uma pessoa que seja caso CONFIRMADO de novo coronavírus (COVID-19)?</span>
                                            <br />
                                            <label>
                                                <input name="contato_confirmado" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="contato_confirmado" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="contato_confirmado" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="contato_animal">Você teve contato com animais em áreas afetadas?</span>
                                            <br />
                                            <label>
                                                <input name="contato_animal" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="contato_animal" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="contato_animal" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="historico_unidade_saude">Você esteve em alguma unidade de saúde nos últimos 14 dias antes do início dos sintomas?</span>
                                            <br />
                                            <label>
                                                <input name="historico_unidade_saude" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="historico_unidade_saude" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="historico_unidade_saude" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="carrinho_sacola_roda">Você reside em local que faz uso de algum tipo de carrinho de feira ou sacola com rodinhas para trazer as compras do mercado ou da feira?</span>
                                            <br />
                                            <label>
                                                <input name="carrinho_sacola_roda" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="carrinho_sacola_roda" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="carrinho_sacola_roda" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="convivencia_crianca">Você mora ou recebe visita de criança de até 2 (dois) anos em sua residência?</span>
                                            <br />
                                            <label>
                                                <input name="convivencia_crianca" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="convivencia_crianca" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="convivencia_crianca" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="animal_estimacao">Você convive em sua residência com algum animal de estimação que passeia nas ruas (cachorro, gato, dentre outros)?</span>
                                            <br />
                                            <label>
                                                <input name="animal_estimacao" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="animal_estimacao" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="animal_estimacao" value="N/A" type="radio" />
                                                <span>Não sei</span>
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
                                            <label>
                                                <input name="carro_particular" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="garagem_residencial">Você estaciona seu carro na garagem de sua residencia?</span>
                                            <br />
                                            <label>
                                                <input name="garagem_residencial" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="garagem_residencial" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="garagem_residencial" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <span for="contato_idoso_gestante">Você convive ou manteve contato com idosos ou gestantes?</span>
                                            <br />
                                            <label>
                                                <input name="contato_idoso_gestante" value="Sim" type="radio" />
                                                <span>Sim</span>
                                            </label>
                                            <label>
                                                <input name="contato_idoso_gestante" value="Não" type="radio" />
                                                <span>Não</span>
                                            </label>
                                            <label>
                                                <input name="contato_idoso_gestante" value="N/A" type="radio" />
                                                <span>Não sei</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
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
                                <img class="responsive-img" src="image/logo-labnet.jpeg" alt="LabNet" title="LabNet" style="max-width: 100px; margin-left: 40px;">
                            </a>
                            <a href="http://lens.cos.ufrj.br/es/">
                                <img class="responsive-img" src="image/logo-lens.gif" alt="Laboratório LENS" title="Laboratório LENS" style="max-width: 250px; margin-left: 40px;">
                            </a>
                            <a href="http://reuse.cos.ufrj.br/">
                                <img class="responsive-img" src="image/logo-software-reuse-team.png" alt="Grupo de Reutilização de Software (COPPE/UFRJ)" title="Grupo de Reutilização de Software (COPPE/UFRJ)" style="max-width: 150px; margin-left: 30px;">
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="center-align">
                            <a href="https://coppe.ufrj.br/">
                                <img class="responsive-img" src="image/logo-coppe.png" alt="COPPE" title="COPPE" style="max-width: 120px; margin-left: 25px;">
                            </a>
                            <a href="https://www.cos.ufrj.br/">
                                <img class="responsive-img" src="image/logo-pesc.png" alt="PESC" title="PESC" style="max-width: 120px; margin-left: 35px;">
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
                        <h5 class="white-text">COVID-19 (coronavírus): Formulário de autonotificação</h5>
                        <p class="grey-text text-lighten-4">Formulário desenvolvido para analisar os sintomas reportado pelo usuário com o objetivo de recomendar ações visando o combate à COVID-19 (coronavírus).</p>
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

        <script>
            const APP_URL = "{{ config('app.url') }}";
        </script>

        <!--jQuery 3.1.1 -->
        <script type="text/javascript" src="plugins/jquery/jquery-3.1.1.js"></script>

        <!--Materialize-->
        <script type="text/javascript" src="plugins/materialize/js/materialize.min.js"></script>

        <!--jQuery Validation Plugin-->
        <script type="text/javascript" src="plugins/jquery-validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="plugins/jquery-validation/additional-methods.min.js"></script>

        <!--Cleave.js-->
        <script type="text/javascript" src="plugins/cleave/cleave.min.js"></script>   

        <!--Application script-->
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>