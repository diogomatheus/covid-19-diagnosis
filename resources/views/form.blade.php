<!DOCTYPE html>
<html>
    <head>
        <title>Covid-19 (coronavírus): Formulário de autonotificação</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Formulário de autonotificação desenvolvido para analisar os sintomas reportado pelo usuário com o objetivo de recomendar ações visando o combate à Covid-19 (coronavírus).">
        <meta name="keywords" content="Covid-19, coronavírus, formulário de autonotificação, análise, sintomas, recomendação, consulta hospitalar, isolamento">
        <meta name="robots" content="all" />

        <link rel="shortcut icon" href="image/favicon.png" type="image/ico"/>
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="image/apple-touch-icon-iphone.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="image/apple-touch-icon-ipad.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="image/apple-touch-icon-iphone-retina.png"/>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="plugins/materialize/css/materialize.min.css" media="screen,projection"/>
        <!--Import application.css-->
        <link type="text/css" rel="stylesheet" href="application.css" rel="stylesheet" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <nav class="light-blue cyan darken-2">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo center">Covid-19 (coronavírus)</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="center">
                    <br />
                    <img class="responsive-img" src="image/ufrj-100-anos-azul-horizontal.svg">
                </div>
                <div class="row">
                    <div class="col s12">
                        <div id="main-content">
                            <div class="center"><h3>Formulário de autonotificação</h3></div>
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
                                                    Nacionalidade:
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
                                                    <input placeholder="Ex: 31/01/2000" name="data_nascimento" id="data_nascimento_dp" type="text" class="datepicker">
                                                    <label for="data_nascimento_dp">Data de nascimento</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    Sexo:
                                                    <label>
                                                        <input name="sexo" type="radio" class="sexo_radio" />
                                                        <span>Masculino</span>
                                                    </label>
                                                    <label>
                                                        <input name="sexo" type="radio" class="sexo_radio" />
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
                                                    Pais de residência:
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
                                                    <select name="ocupacao">
                                                        <option value="" disabled selected>Selecione uma opção</option>
                                                        <option>Profissional de saúde</option>
                                                        <option>Estudante da área de saúde</option>
                                                        <option>Profissional de laboratório</option>
                                                        <option>Trabalha em contato com animais</option>
                                                        <option>Outros</option>
                                                    </select>
                                                    <label>Qual é a sua ocupação?</label>
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
                                            <input placeholder="Ex: 31/01/2000" name="data_sintoma" id="data_sintoma_dp" type="text" class="datepicker">
                                            <label for="data_sintoma_dp">Data dos primeiros sintomas</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            Selecione os sintomas apresentados:
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
                                            Doenças prévias (selecionar todas doenças pertinentes):
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
                                            Você realizou alguma viagem para fora do brasil nos últimos 14 dias antes do início dos sintomas?<br />
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
                                        <div class="col s12">
                                            Você teve contato próximo com uma pessoa que seja caso SUSPEITO de novo coronavírus (Covid-19)?<br />
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
                                        <div class="col s12">
                                            Você teve contato próximo com uma pessoa que seja caso CONFIRMADO de novo coronavírus (Covid-19)?<br />
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
                                        <div class="col s12">
                                            Você teve contato com animais em áreas afetadas?<br />
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
                                        <div class="col s12">
                                            Você esteve em alguma unidade de saúde nos últimos 14 dias antes do início dos sintomas?<br />
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
                                        <div class="col s12">
                                            Você reside em local que faz uso de algum tipo de carrinho de feira ou sacola com rodinhas para trazer as compras do mercado ou da feira?<br />
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
                                        <div class="col s12">
                                            Você mora ou recebe visita de criança de até 2 (dois) anos em sua residência?<br />
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
                                        <div class="col s12">
                                            Você convive em sua residência com algum animal de estimação que passeia nas ruas (cachorro, gato, dentre outros)?<br />
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
                                        <div class="col s12">
                                            Você utiliza carro particular para apoiar seu deslocamento?<br />
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
                                        <div class="col s12">
                                            Você estaciona seu carro na garagem de sua residencia?<br />
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
                                        <div class="col s12">
                                            Você convive ou manteve contato com idosos ou gestantes?<br />
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
                                            <button class="waves-effect waves-light btn-large" type="reset">Limpar os dados</button>
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
            </div>
        </main>
        <footer class="page-footer cyan darken-2">
            <div class="container">
                <div class="row">
                    <div class="col s6">
                        <h5 class="white-text">Covid-19 (coronavírus): Formulário de autonotificação</h5>
                        <p class="grey-text text-lighten-4">Formulário desenvolvido para analisar os sintomas reportado pelo usuário com o objetivo de recomendar ações visando o combate à Covid-19 (coronavírus).</p>
                    </div>
                    <div class="col offset-l2 s4">
                        <h5 class="white-text">Links úteis</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="https://coronavirus.saude.gov.br/">O que é Covid-19 (coronavírus)?</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.who.int/health-topics/coronavirus">OMS Covid-19 (coronavírus)</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.bing.com/covid">Bing Covid-19 Tracker</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2020, enfrentamento à Covid-19 (coronavírus).
                </div>
            </div>
        </footer>

        <!-- jquery -->
        <script type="text/javascript" src="plugins/jquery/jquery-3.1.1.js"></script>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="plugins/materialize/js/materialize.min.js"></script>

        <!-- jquery validation -->
        <script type="text/javascript" src="plugins/jquery-validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- jquery formatter -->
        <script type="text/javascript" src="plugins/cleave/cleave.min.js"></script>   

        <!-- application -->
        <script type="text/javascript" src="application.js"></script>
    </body>
</html>