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
<h1>Atualização de aluno</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_aluno.php">
	<h3>Escolha o aluno a ser modificado</h3>
	<?php
include ("../controle/conexao.php");
$conn = conectar();
try{
  $sql = 'SELECT * FROM aluno ORDER BY nome_aluno';
  print "<select name='cbx_aluno'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['matricula']."'>".$row['nome_aluno']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
	<br><h3>Digite um novo nome para o aluno</h3><br>
	<input type="text" name="txt_aluno">
	<input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>