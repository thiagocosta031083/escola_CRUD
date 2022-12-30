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
<h3>Excluir Professor</h3>
    <form method="post" action="../controle/excluir_professor.php">
    <fieldset>
    <table>
    <tr><td><label>professor:</label></td>
    <!--codigo para fazer um selecao do professor no banco de dados-->
    <td><?php
        include ("../controle/conexao.php");
        $conn = conectar();
        $sql = 'SELECT * FROM professor';
        print "<select name='cbx_professor'>";
        //foreach significa 'para cada'conexao com o banco consulta a tabela 'sql' de cada linha
        foreach($conn -> query($sql) as $row) {
            print "<option value='".$row['cod_professor']."'>".$row['nome_professor']."</option>";
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