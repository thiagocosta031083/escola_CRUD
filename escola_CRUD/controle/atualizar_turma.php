<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Atualização de turma</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
$conn = conectar();
try{
	$cod_turma = $_POST['cbx_turma'];	
	$up_turma = $_POST['txt_turma'];
	$sql = "UPDATE turma SET num_turma = '$up_turma' WHERE num_turma = $cod_turma";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
header('Location: http://localhost/escola_a30');
?>
</fieldset></form></div></div></body></html>