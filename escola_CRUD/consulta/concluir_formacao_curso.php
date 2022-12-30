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
<h3>Resumo de Disciplinas</h3>
<table border="1"><tr><th width="50%"> Curso</th><th>Disciplina</th></tr>
<?php
include("../controle/conexao.php");
$conn = conectar();
$sql = "SELECT cod_curso FROM curso ORDER BY cod_curso DESC LIMIT 1";
    foreach($conn->query($sql) as $row){
        $curso = $row['cod_curso'];
    
}

$sql = "SELECT nome_curso, nome_disciplina FROM curso
INNER JOIN curso_tem_disciplina ON cod_curso=curso
INNER JOIN disciplina ON disciplina=cod_disciplina
WHERE cod_curso=$curso";
foreach ($conn->query ($sql) as $row) {
    print "<tr><td width='25%'>".$row['nome_curso']."</td>
           <td class='valores' width='25%'>".$row['nome_disciplina']."</td></tr>";

}

?><a href='../index.html'>Voltar</a></table>
</div></div>
</body>
</html>