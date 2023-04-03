<?php
include("../models/conexao.php");

$varAlunoCodigo = $_POST["alunoCodigo"];
$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["sexo"];

mysqli_query($conexao, "UPDATE alunos SET nome='$varAlunoNome', 
cidade='$varAlunoCidade', sexo='$varAlunoSexo' WHERE cod= $varAlunoCodigo");

header("location: ../index.php");

?>