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
<?php
/*Para fazer comentário no PHP (quando fica entre <?php ?>, coloca "/**///" */
include("conexao.php");
$conn = conectar();
try{
	$aluno = $_POST['txt_aluno'];
	$bairro = $_POST['cbx_bairro'];
	$turma = $_POST['cbx_turma'];
	if( isset($aluno)){
	$stm = $conn->prepare("INSERT INTO aluno(nome_aluno,bairro_aluno,turma_aluno) VALUES (?,?,?)");
	$stm->bindValue(1,$aluno,PDO::PARAM_STR);
	$stm->bindValue(2,$bairro,PDO::PARAM_STR);
	$stm->bindValue(3,$turma,PDO::PARAM_STR);
	$stm->execute();
	}
	echo "<script language='javascript' type='text/javascript'>window.setInterval(alert('Cadastrado com Sucesso',3000;</script>";
	header('Loction: http://localhost/escola_a30');
}catch(PDOException $ex){
	echo 'Erro'. $ex->getMenssage();

}

?>
<a href='../index.html'>Voltar</a>
</div></div>
</body>
</html>