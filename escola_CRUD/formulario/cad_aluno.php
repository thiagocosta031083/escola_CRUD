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
    <h2>Cadastro de Aluno</h2>
    <form method="post" action="../controle/inserir_aluno.php">
    <fieldset>
    <table>
    <tr><td><label>Nome Aluno:</label></td><td><input type="text" name="txt_aluno" required></td></tr>
    <tr><td><label>Bairro:</label></td>
  
    <!--codigo para fazer um selecao do turma no banco de dados-->
    <td><?php
        include ("../controle/conexao.php");
        $conn = conectar();
        try{

        $sql = 'SELECT * FROM bairro';
        print "<select name='cbx_bairro'>";
        //foreach significa 'para cada'conexao com o banco consulta a tabela 'sql' de cada linha
        foreach($conn -> query($sql) as $row) {
            print "<option value='".$row['cod_bairro']."'>".$row['nome_bairro']."</option>";
        }
       print "</select></td>";
       echo "<td>Turma";

       $sql = 'SELECT * FROM turma';
       print "<select name='cbx_turma'>";
       //foreach significa 'para cada'conexao com o banco consulta a tabela 'sql' de cada linha
       foreach($conn -> query($sql) as $row) {
           print "<option value='".$row['num_turma']."'>".$row['num_turma']."</option>";
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