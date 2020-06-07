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
        <link rel="stylesheet" href="../style/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style/index.css">

         <!-- Fontes e Ícones -->
         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900
        &display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
        foreach ($_POST['Cursos'] as $menuCursos)
            if ($menuCursos) {
                $cursoSelecionado = implode('<br/>- ',$_POST['Cursos']);
            }

        // Sistema de envio de e-mails
            require __DIR__.'/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Username='';
            $mail->Password='';
            
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->setFrom('',$_POST['inputNome']);
            $mail->addAddress('');
            $mail->addReplyTo($_POST['inputEmail'],$_POST['inputNome']);

            $mail->isHTML(true);
            $mail->Subject='Formulario de interesse PFP: '.$_POST['inputNome'];
            $mail->Body='<h3 align="center">Você recebeu um formulário de interesse para o Programa de Formação Personalizada!</h3><br/>
            <br/>Nome: '.$_POST['inputNome'].
            '<br/>Email: '.$_POST['inputEmail'].
            '<br/>Telefone: '.$_POST['inputTelefone'].
            '<br/>Cidade: '.$_POST['inputCidade'].
            '<br/>UF: '.$_POST['inputUf'].
            '<br/><h4>Dados do Curso de Interesse:</h4>
            <br/>Cursos Selecionados: '.$cursoSelecionado.
            '<br/>Tempo de Duração: '.$_POST['Tempo'].
            '<br/>Numero de servidores participantes: '.$_POST['formNumero'];

            if (!$mail->send()) { ?>
            <div class="container-fluid bgImg" style="margin-bottom: 100px">
                <div class="row">
                    <div class="col-md-12" align="center" style="margin-top:50px">
                        <span class="material-icons" style="font-size: 108px; color: white">error_outline</span>
                    </div>
                </div>
                <div class="row"></div>
                    <div class="col-md-12" align="center">
                        <p class="textoHeader" style="padding-bottom: 100px" >Algo inesperado aconteceu. Tente novamente ou contate-nos diretamente.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <p class="textoHeader" style="color: black">Você será redirecionado para a página principal em 5 segundos...</p>
                    </div>
                </div>
            </div>
        <script>setTimeout(function(){window.location="landing-page-url-here";}, 5000)</script>           
        <?php } else {
        ?>
        <div class="container-fluid bgImg" style="margin-bottom: 100px">
            <div class="row">
                <div class="col-md-12" align="center" style="margin-top:50px">
                    <span class="material-icons" style="font-size: 108px; color: white">done</span>
                </div>
            </div>
            <div class="row"></div>
                <div class="col-md-12" align="center">
                    <p class="textoHeader" style="padding-bottom: 100px" >Seu email foi enviado com sucesso!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <p class="textoHeader" style="color: black">Você será redirecionado para a página principal em 5 segundos...</p>
                </div>
            </div>
        </div>
        <script>setTimeout(function(){window.location="http://formacaocontinuada.com.br";}, 5000)</script>
        <?php } ?>

        <!-- Bootstrap, jQuery e Popper -->
        <script src="style/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="style/js/bootstrap.min.js"></script>
    </body>
</html>