<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Escola</title>
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<div id="flex-container">
<div id="box" class="barra"> 
<?php
include("conexao.php");
$conn = conectar();

try{
	$professor = $_POST["cbx_professor"];
	if( isset($professor)){
	$stm = $conn->prepare("DELETE FROM professor WHERE cod_professor=?");
	$stm->bindValue(1,$professor,PDO::PARAM_STR);
	$stm->execute();
	}
	echo "<script language='javascript' type='text/javascript'>window.setInterval(alert('Cadastrado com Sucesso',3000;</script>";
	header('Loction: http://localhost/escola_a30');
}catch(PDOException $ex){
	//	echo 'Erro'. $ex->getMenssage();

}
?>
<a href='../index.html'>Voltar</a>
</div></div>
</body>
</html>