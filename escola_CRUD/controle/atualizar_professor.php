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
<h1>Atualização de professor</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
$conn = conectar();
try{
	$cod_professor = $_POST['cbx_professor'];	
	$up_professor = $_POST['txt_professor'];
	$sql = "UPDATE professor SET nome_professor = '$up_professor' WHERE cod_professor = $cod_professor";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
header('Location: http://localhost/escola_a30');
?>
</fieldset></form></div></div></body></html>