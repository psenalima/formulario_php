<html>
<head>
    <meta charset="utf-8" />
    <title>INFORMACOES</title>
</head>
<body>
<?php
$nome = $_POST["user_name"];

$email = $_POST["user_email"];
$telefone = $_POST["user_cel"];
$mensagem = $_POST["user_msg"];
$erro = 0;


//Verifica se o campo nome não está em branco.
echo !empty($nome) ? "Nome: {$nome}<br/>" : "Favor digitar seu nome<br/>";

//Verifica se o campo sobrenome não está em branco.


//Verifica se o campo email não está em branco.
echo (!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL)) ? "Email: {$email}<br/>" : "Favor digitar seu email ou um email válido<br/>";

//Verifica se o campo telefone não está em branco e se o telefone é válido
echo(strlen($telefone)>=8 && preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/", $telefone))
    ? "Telefone: {$telefone}<br/>"
    : "Preencha o campo telefone somente com números.<br/>";

//Verifica se o campo email não está em branco.
echo !empty($mensagem) ? "Mensagem: {$mensagem}<br/>" : "Favor digitar sua mensagem<br/>";
?>
</body>
</html
