<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola_a30</title>
</head>
<body>
    <h1>Consulta de turmas</h1>
    <div class="flex-container">
    <div id="box">
        <fieldset>
            <table border="1"><tr><th width=50%>Turma</th><th>Curso</th><th>Professor</th></tr>
        <?php
        include ("../controle/conexao.php");
        $conn = conectar();
        try{

            $sql = "SELECT t.num_turma,p.nome_professor,c.nome_curso FROM turma t
            INNER JOIN professor p ON professor_turma=cod_professor
            INNER JOIN curso c ON curso_turma=cod_curso";
            foreach ($conn->query($sql) as $row){
            print "<tr><td>".$row['num_turma']."</td><td>".$row['nome_curso']."</td><td>".$row['nome_professor']."</td></tr>";
            
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