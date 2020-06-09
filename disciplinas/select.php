<?php
$inputNome = isset($_POST['inputNome']) ? $_POST['inputNome'] : false;

$inputEmail = isset($_POST['inputEmail']) ? $_POST['inputEmail'] : false;

$inputCidade = isset($_POST['inputCidade']) ? $_POST['inputCidade'] : false;

$menuUf = isset($_POST['inputUf']) ? $_POST['inputUf'] : false;

$inputTelefone = isset($_POST['inputTelefone']) ? $_POST['inputTelefone'] : false;

foreach ($_POST['Cursos'] as $menuCursos)
    
$menuTempo = isset($_POST['Tempo']) ? $_POST['Tempo'] : false;

$menuParticipantes = isset($_POST['formNumero']) ? $_POST['formNumero'] : false;


// Sistema de envio de e-mails

$email_from = 'sites@poliscivitas.com.br';
$email_subject = "Novo envio de formulário - Criação Personalizada de PFC";
$email_body = "Você recebeu um formulário de interesse enviado por $inputNome. \n

Dados do interessado: \n \n

Nome: $inputNome \n
e-mail: $inputEmail \n
Cidade/UF: $inputCidade/$menuUf \n
Telefone: $inputTelefone \n \n

----------- Dados do Curso ----------- \n \n

Cursos Selecionados: $menuCursos \n
Tempo de Duração: $menuTempo \n
Número de Participantes: $menuParticipantes";

$to = "sites@poliscivitas.com.br";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $inputEmail \r\n";

mail($to, $email_subject, $email_body, $headers);


Echo 'Mensagem enviada com sucesso!';