<?php
include("blades/header.php");
?>

<div class="container p-5 mt-5 border bg-white rounded">
    <a href="../index.php" class="btn btn-secondary">Voltar</a><br><br>

    <form action="../controllers/cadastrarAluno.php" method="post">
        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="alunoNome"><br>
        <label class="form-label">Cidade</label><br>
        <input class="form-control" type="text" name="alunoCidade"><br>

        <div class="my-3 row">
            <div class="my-3 col">
                <input class="form-check-input" type="radio" name="sexo" value="m">
                <label class="form-label">Masculino</label>
                <input class="form-check-input" type="radio" name="sexo" value="f">
                <label class="form-label">Feminino</label>
            </div>
        </div>
        <input type="submit" name="Cadastrar">
    </form>
</div>

<?php
include("blades/footer.php")
?>