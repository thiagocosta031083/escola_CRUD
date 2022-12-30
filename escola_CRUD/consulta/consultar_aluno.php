<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola_a30</title>
</head>
<body>
    <h1>Consulta de alunos</h1>
    <div class="flex-container">
    <div id="box">
        <fieldset>
            <table border="1"><tr><th width=50%>Aluno</th><th>Curso</th><th>Bairro</th></tr>
        <?php
        include ("../controle/conexao.php");
        $conn = conectar();
        try{

            $sql = "SELECT nome_aluno,nome_curso,nome_bairro FROM aluno
            INNER JOIN turma ON turma_aluno=num_turma
            INNER JOIN curso ON curso_turma=cod_curso
            INNER JOIN bairro ON bairro_aluno=cod_bairro";
            foreach ($conn->query($sql) as $row){
                print "<tr><td>".$row['nome_aluno']."</td><td>".$row['nome_curso']."</td><td>".$row['nome_bairro']."</td></tr>";
                
            }

        }catch(PDOException $ex){
            echo 'Erro '.$ex->getMessage();
        }
        ?>

        </table>
        </fieldset>    
    </div></div>

</body>
</html>