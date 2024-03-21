<?php
//BUSCANDO A CLASSE
require_once 'classe/Funcoes.class.php';
//ESTANCIANDO A CLASSE
$objFc = new Funcoes();
if(isset($_POST['btEnviar'])){
	$objFc->enviarEmail($_POST);
}

?>
<!DOCTYPE HTML>
<html lang="pt=br">
<head>
	<meta charset="utf-8">
	<title>Formulário de Contato</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<form action="" method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome" required="required"><br>
    <label>E-mail:</label><br>
    <input type="email" name="email" required="required" pattern="^[a-z0-9._-]{2,}@[a-z0-9-]{2,}.[a-z.]{2,}$"><br>
    <label>Assunto:</label><br>
    <input type="text" name="assunto" required="required"><br>
    <label>Mensagem:</label><br>
	<textarea name="mensagem" required="required"></textarea>
    <br><br>
    <input type="submit" name="btEnviar" value="Enviar">    
</form>
</body>
</html>