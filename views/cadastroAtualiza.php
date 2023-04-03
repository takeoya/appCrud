<?php
include("../models/conexao.php");
include("blades/header.php");

$varIda = $_GET["ida"];
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE cod = $varIda");
$exibe = mysqli_fetch_array($query);
?>

<div class="container p-5 mt-5 border bg-white rounded">
    <a href="../index.php" class="btn btn-secondary">Voltar</a><br><br>

    <form action="../controllers/atualizarAluno.php" method="post">
        <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0]?>"><br>
        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1]?>"><br>
        <label class="form-label">Cidade</label><br>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2]?>"><br>
        <label class="form-label">Sexo</label><br>
        Masculino<input type="radio" name="sexo" value="m" <?php echo ($exibe[3]=="m")?"checked":""; ?>>
        Feminino<input type="radio" name="sexo" value="f" <?php echo ($exibe[3]=="f")?"checked":""; ?>><br><br>
        <input type="submit" name="Atualizar" value="Atualizar">
    </form>
</div>

<?php

include("blades/footer.php")
?>