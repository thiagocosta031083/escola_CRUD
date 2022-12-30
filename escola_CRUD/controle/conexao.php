<?php
//para fazer a conexao com o banco de dados estrutra da seguinte forma
//Criar uma função para fazer a conexão
function conectar(){//o parênteses serve para fazer a passagem de parâmetro (ex: colocar login e senha), mas esse parênteses é obrigatório mesmo que esteja em branco
define("server", "mysql:host=localhost;dbname=escola_a30");//para fazer a passagem de parâmetro 
define("user","root");
define("pass", "");
try{//comando para "tentar" conectar, mas ele só passa se todos os atributos estiverem corretos

//$conn = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
$conn = new PDO(server,user,pass);
   //dois pontos duplos é um operador de modificação de escopo
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $conn->exec("set names UTF8");
} catch (PDOException $ex) {//o catch vai trazer a mensagem de erro

    echo "Deu ruim, sem acesso ao sistema:". $ex->getMessage();
    die;
}


return $conn;
}

?>
