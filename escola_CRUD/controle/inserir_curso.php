<?php
include ("conexao.php");
$conn = conectar();
$curso = $_POST["txt_curso"];
$conn->query("INSERT INTO curso(nome_curso) VALUES ('$curso')");
echo "<a href='../consulta/consultar_disciplina.php'>Selecionar a disciplina</a>";
?><br>
	echo '<script>
	alert("Registro Salvo com Sucesso!"); 
	window.location.href= "../index.html";
	</script>';
