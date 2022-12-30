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
<h2>Cadastro de Curso</h2>
<form method="post" action="../controle/inserir_curso.php">

<fieldset>
<table>
  
 <tr><td><label>Digite Curso:</label></td><td><input type="text" name="txt_curso">
      
<!--Curso tem Disciplina = Par inserir a lista de disciplinas no formulário-->
    <input type="submit" value="Cadastrar"></td></tr>

    
</table>
</fieldset>
        
</from>

</div></div>
</body>
</html>