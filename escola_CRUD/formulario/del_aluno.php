<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
    <title>Escola_a30</title>
</head>
<body>
<div id="flex-container">
<div id="box" class="barra">    
<h3>Excluir Aluno</h3>
    <form method="post" action="../controle/excluir_aluno.php">
    <fieldset>
    <table>
    <tr><td><label>Aluno:</label></td>
    <!--codigo para fazer um selecao do aluno no banco de dados-->
    <td><?php
        include ("../controle/conexao.php");
        $conn = conectar();
        $sql = 'SELECT * FROM aluno';
        print "<select name='cbx_aluno'>";
        //foreach significa 'para cada'conexao com o banco consulta a tabela 'sql' de cada linha
        foreach($conn -> query($sql) as $row) {
            print "<option value='".$row['matricula']."'>".$row['nome_aluno']."</option>";
        }
       print "</select>";       
       ?>

       <tr ><td colspan="2" align="right"><input type="submit" value="Excluir"></td></tr>
       </table>

    </fieldset>
    </form>
</div></div>


</body>
</html>