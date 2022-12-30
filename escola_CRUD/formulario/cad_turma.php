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
<h2>Cadastro de Turma</h2>
<form method="post" action="../controle/inserir_turma.php">
<fieldset>		
<table>
    
    <tr><td><label>Professor:</label></td>
        <td><?php	  
	include ("../controle/conexao.php");
	$conn = conectar();
	try{
	$sql = 'SELECT * FROM professor';
	print "<select name='cbx_professor'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_professor']."'>".$row['nome_professor']."</option>";
	}
	print "</select></td>";
	echo "<td>Curso";
	
    $sql = 'SELECT * FROM curso';
	print "<select name='cbx_curso'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_curso']."'>".$row['nome_curso']."</option>";
	}
	print "</select>";
}catch(PDOException $ex){
	echo 'Erro'. $ex->getMenssage();

}
?>
	
</td></tr>    
<tr ><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</table>

</fieldset>



</form>

</body>
</html>