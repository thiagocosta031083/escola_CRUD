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
    $disciplina=$_POST["item"];
    $sql = "SELECT cod_curso FROM curso ORDER BY cod_curso DESC LIMIT 1";
    foreach($conn->query($sql) as $row){
        $curso = $row['cod_curso'];
    }
    $sql="INSERT INTO curso_tem_disciplina(curso,disciplina) 
        VALUES ($curso,$disciplina)";
    $conn->query($sql);
    echo "<a href='../consulta/consultar_disciplina.php'>Selecionar outra disciplina</a><br><br>  
    <a href='../consulta/concluir_formacao_curso.php'>Finalizar Seleção</a>";

?>
<a href='../index.html'>Voltar</a>
</div></div>
</body>
</html>