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
include ("conexao.php");
$conn = conectar();
$disciplina = $_POST["txt_disciplina"];
$conn->query("INSERT INTO disciplina(nome_disciplina) VALUES ('$disciplina')");
?>
	echo '<script>
	alert("Registro Salvo com Sucesso!"); 
	window.location.href= "../index.html";
	</script>';
</div></div>
</body>
</html>