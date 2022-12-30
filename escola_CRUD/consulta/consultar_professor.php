<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola_a30</title>
</head>
<body>
    <h1>Consulta de professor</h1>
    <div class="flex-container">
    <div id="box">
        <fieldset>
            <table border="1"><tr><th width=50%>Professor</th></tr>
        <?php
        include ("../controle/conexao.php");
        $conn = conectar();
        try{

            $sql = "SELECT nome_professor FROM professor";
            foreach ($conn->query($sql) as $row){
                print "<tr><td>".$row['nome_professor']."</td></tr>";
            
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