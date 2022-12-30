<?php
include("conexao.php");
$conn = conectar();
$professor = $_POST["cbx_professor"];
$curso = $_POST["cbx_curso"];

    $conn->query("INSERT INTO turma(professor_turma,curso_turma)VALUES('$professor','$curso')");
    echo "<script>alert('Turma cadastrada com sucesso')</script>
    <a href='../index.html'>Voltar</a>";

?>
