<!doctype html>
<?php
function redirectIfNeeded(){
    $url = $_SERVER["REQUEST_URI"];
    if(preg_match("/\.php/$", $url))
        header("Location: ".preg_replace("/\.php/",$url));
}
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Programa de Formação Continuada</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="style/css/bootstrap.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="style/stylesheet.css">
        <link rel="stylesheet" href="style/index.css">

        <!-- Fontes e Ícones -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900
        &display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid no-padding bgImg">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                <p class="titulo">Programa Formação Continuada Pólis Civitas</p>
                </div>
                <div class="col-md-2" style="margin-bottom: -50px" align="right">
                    <img class="logo" src="img/marca_grupo.svg" alt="Responsive image" align="center"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <p class="textoHeader">Com investimento a partir de <b class="bold">R$ 9,90</b> você agregará cursos exclusivos, de alta qualidade, com renomados professores para seus servidores e colaboradores.</p>
                </div>
            </div>
            <div class="row" style="margin-bottom:60px">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <button class="button" onclick="window.location.href='/formulario'"><span>Quero capacitar</span></button>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3" align="center" style="margin-left: -60px">
                    <a href="#saibamais">
                    <legend class="textoHeader" style="margin-bottom:-20px; font-size: 2vw">SAIBA MAIS</legend>
                    <span class="material-icons" style="font-size:54px; color:#FFFFFF">arrow_drop_down_circle</span></a>
                </div>
            </div>
        </div>
        <div clas="container" style="margin-top: 50px; overflow: hidden; margin-bottom: 50px">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <p class="texto2" id="saibamais">Programa Formação<br/>Continuada Pólis Civitas</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <p class="textoHeader" style="color: black; font-size: 24px; font-weight: 500">Pautado em tecnologia de ponta, o <b>Formação Continuada Pólis Civitas</b> é um programa sócio educacional inédito que abrange os entes públicos e privados do Brasil, com soluções de capacitação direcionadas aos <b>servidores e colaboradores nas áreas da educação, autismo, saúde, gestão pública, direito e negócios.</b>
                    <br/><br/>
                    São mais de <b>15.800 h/a</b> divididas em <b>7 eixos</b>, com mais de <b>395 opções</b> de cursos para que a organização <b>customize de acordo com seu interesse.</b></p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <button onclick="window.location.href='/formulario'" class="button2"><span>Inove sua gestão</span></button>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <p class="texto3">Flexibilidade para servidores e colaboradores</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-2" align="center">
                    <fieldset>
                        <span class="material-icons" style="font-size: 108px">live_tv
                        </span>
                        <p class="textolegenda">As aulas podem ser assistidas ao vivo, pela web ou o aluno pode acompanhar o curso gravado, pela plataforma.</p>
                    </fieldset>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2" align="center">
                    <fieldset>
                        <span class="material-icons" style="font-size: 108px">how_to_reg
                        </span>
                        <p class="textolegenda">Apresentação dos conteúdos por profissionais extremamente qualificados e com grande experiência de mercado.</p>
                    </fieldset>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2" align="center">
                    <fieldset>
                        <span class="material-icons" style="font-size: 108px">library_books
                        </span>
                        <p class="textolegenda">Livros Digitais, desenvolvidos por renomados professores e uma experiente equipe editorial, disponibilizados em uma moderna plataforma virtual de ensino.</p>
                    </fieldset>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <p class="texto3">Apoio para gestores</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-2" align="center">
                    <fieldset>
                        <span class="material-icons" style="font-size: 108px">headset_mic
                        </span>
                        <p class="textolegenda">Monitor responsável pelo suporte administrativo e pela operacionalização das atividades presentes nos planos desenvolvidos pelos professores conteudistas.</p>
                    </fieldset>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2" align="center">
                    <fieldset>
                        <span class="material-icons" style="font-size: 108px">supervisor_account
                        </span>
                        <p class="textolegenda">Coordenador responsável pelo acompanhamento do programa e pela sua implementação de forma correta.</p>
                    </fieldset>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2" align="center">
                    <fieldset>
                        <span class="material-icons" style="font-size: 108px">school
                        </span>
                        <p class="textolegenda">A organização pode formatar o <b>programa</b> para o número de servidores ou colaboradores de seu interesse, com mínimo de 6 meses de duração.</p>
                    </fieldset>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <p class="texto4"><b>A educação</b> atuando pelo <b>melhor para sua gestão</b> através do Grupo Pólis Civitas</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <p class="texto5">Você pode ter todos os cursos online, ou poderá incluir momentos presenciais, <b>workshops</b>, com nossos profissionais, ou, poderá mesclar os conteúdos <b>Pólis Civitas</b>, com os profissionais locais.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="center">
                    <button onclick="window.location.href='/formulario'" class="button3"><span>Quero o melhor para minha gestão</span></button>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="container-fluid footer">
            <div class="row" style="padding-left: 1vw">
                <div class="col-md-2 img_footer vl">
                </div>
                <div class="col-md-6 vl" style="padding-left: 1vw">
                    <p class="textoFooter" style="font-weight: 600; font-size: 1.5vw; margin-bottom: 0.2vw">Sobre nós</p>
                    <p class="textoFooter">Desde 1997 atuando na educação, o Grupo Educacional Pólis Civitas tem suas atividades voltadas para a produção, sistematização e difusão do conhecimento. Temos o objetivo de levar a educação aos mais longínquos locais do Brasil, buscando a excelência educacional, através de professores renomados e com reconhecimento nacional, aliados à inovação, por meio de conteúdos inéditos. Com isso, já acumulamos experiência na capacitação e/ ou especialização de mais de 200 mil profissionais em todo país.</p>
                </div>
                <div class="col-md-4">
                    <p class="textoFooter" style="font-weight: 600; font-size: 1.5vw; margin-bottom: 0.2vw">Contate-nos</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="material-icons pos" style="font-size: 22px; color:#FFFFFF">phone</span>
                                <span class="textoFooter2">(41) 3015.5559</span>
                                <span class="textoFooter2">| Whatsapp: (41) 9249.2486</span>
                            </div>
                            <div class="col-md-12">
                                <span class="material-icons pos" style="font-size: 22px; color:#FFFFFF">alternate_email</span>
                                <span class="textoFooter2">contato@poliscivitas.com.br</span>
                            </div>
                            <div class="col-md-12">
                                <span class="material-icons pos" style="font-size: 22px; color:#FFFFFF">location_on</span>
                                <span class="textoFooter2">Rua Antônio Escorsin, 1650. São Braz | Curitiba-PR</span>
                            </div>
                            <div class="col-md-12">
                                <a href="https://poliscivitas.com.br">
                                <span class="material-icons pos" style="font-size: 22px; color:#FFFFFF">language</span>
                                <span class="textoFooter2">www.poliscivitas.com.br</span>
                                </a>
                            </div>
                            <div class="col-md-6"  align="right" style="padding-right: 1vw">
                                <a href="https://www.facebook.com/poliscivitas/">
                                <img class="icones" src="img/facebook.svg" alt="Responsive image"/></a>
                            </div>
                            <div class="col-md-6" align="left" style="padding-left: 1vw">
                                <a href="https://www.instagram.com/poliscivitas/">
                                <img class="icones" src="img/instagram.svg" alt="Responsive image"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Bootstrap, jQuery e Popper -->
    <script src="style/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    </body>

</html>
