<?php 
include("../models/conexao.php");

$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["sexo"];

mysqli_query($conexao, "INSERT INTO alunos (nome,cidade,sexo) 
            values('$varAlunoNome','$varAlunoCidade', '$varAlunoSexo')");

header("location:../index.php");

?>
