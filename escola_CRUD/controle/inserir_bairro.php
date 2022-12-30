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
	$bairro = $_POST["txt_bairro"];
	if( isset($bairro)){
	$stm = $conn->prepare("INSERT INTO bairro(nome_bairro) VALUES (?)");
	$stm->bindValue(1,$bairro,PDO::PARAM_STR);
	$stm->execute();
	}
	echo '<script>
	alert("Registro Salvo com Sucesso!"); 
	window.location.href= "../index.html";
	</script>';

}catch(PDOException $ex){
	echo 'Erro'. $ex->getMenssage();

}
?>


<!--Antes a conexão era feita direto (como abaixo), mas para proteger o banco a solução acima é melhor
	include("conexao.php");
$conn = conectar();
$bairro = $_POST["txt_bairro"];
$conn->query("INSERT INTO bairro(nome_bairro) VALUES ('$bairro')");-->

<a href='../index.html'>Voltar</a>
</div></div>
</body>
</html>