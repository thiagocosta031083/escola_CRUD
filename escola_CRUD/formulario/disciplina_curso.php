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
    <h1>Disciplinas</h1>
    <table border="1"><tr><th width="50%">Titulo</th></tr>
<?php
include ("../controle/conexao.php");
$conn = conectar();
$disciplina=$_POST["txt_disciplina"];
$sql="SELECT * FROM disciplina WHERE nome_disciplina LIKE '%$disciplina%' ORDER BY nome_disciplina";
print "<form method='post' action='../controle/incluir_disciplina.php'>";
foreach($conn->query($sql) as $row){
print "<tr><td><input name='item' type='radio' value='".$row['cod_disciplina']."'>".$row['nome_disciplina']."</td></tr>";

}

//Como inserir o botão Incluir em baixo da tabela
echo "<input type='submit' value='Incluir item'></form></table>";
echo "<a href='../consulta/consultar_disciplina.php'>Voltar</a>";

?>
</div></div>
</body>
</html>