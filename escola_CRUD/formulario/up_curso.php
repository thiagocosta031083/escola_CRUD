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
<h1>Atualização de curso</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_curso.php">
	<h3>Escolha o curso a ser modificado</h3>
	<?php
include ("../controle/conexao.php");
$conn = conectar();
try{
  $sql = 'SELECT * FROM curso ORDER BY nome_curso';
  print "<select name='cbx_curso'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_curso']."'>".$row['nome_curso']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
	<br><h3>Digite um novo nome para o curso</h3><br>
	<input type="text" name="txt_curso">
	<input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>