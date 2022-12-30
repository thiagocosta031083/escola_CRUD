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
<h2>Excluir turma</h2>
    <form method="post" action="../controle/excluir_turma.php">
    <fieldset>
    <table>
    <tr><td><label>Turma:</label></td>
    <!--codigo para fazer um selecao do turma no banco de dados-->
    <td><?php
        include ("../controle/conexao.php");
        $conn = conectar();
        $sql = 'SELECT * FROM turma';
        print "<select name='cbx_turma'>";
        //foreach significa 'para cada'conexao com o banco consulta a tabela 'sql' de cada linha
        foreach($conn -> query($sql) as $row) {
            print "<option value='".$row['num_turma']."'>".$row['num_turma']."</option>";
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