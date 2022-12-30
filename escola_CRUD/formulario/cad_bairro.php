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
<h2>Cadastro de bairro</h2>
    <form method="post" action="../controle/inserir_bairro.php">
    <fieldset>        
        <label>Digite o bairro</label>
        <input type="text" name="txt_bairro">
        <input type="submit" value="Cadastrar" class="botoes">
        </fieldset>
    </form>
</div></div>
</body>
</html>