<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Escola A30</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Atualização de aluno</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
$conn = conectar();
try{
	$cod_aluno = $_POST['cbx_aluno'];	
	$up_aluno = $_POST['txt_aluno'];
	$sql = "UPDATE aluno SET nome_aluno = '$up_aluno' WHERE matricula = $cod_aluno";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
header('Location: http://localhost/escola_a30');
?>
</fieldset></form></div></div></body></html>