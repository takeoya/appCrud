<?php
include("models/conexao.php");

include("views/blades/header.php")
?>

<div class="container p-5 mt-5 border bg-white rounded">
    

    <a href="views/cadastro.php"><button class="btn btn-success">Cadastrar</button></a><hr>

    <form action="index.php" method="post">
        <input class="form-control" type="text" name="buscar" placeholder="Digite a busca">
    </form><hr>

    <?php
    if(empty($_POST["buscar"])){
        echo "Nenhum resultado";
    }else{
        $varBuscar = $_POST["buscar"];
    ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <td><b>Nome</b></td>
            <td><b>Editar</b></td>
            <td><b>Excluir</b></td>
        </tr>


    <?php

        $query = mysqli_query($conexao, "SELECT * from alunos WHERE nome LIKE '%$varBuscar%' ORDER BY cod ASC");
        while($exibe = mysqli_fetch_array($query)){
            $vogal =($exibe[3]=="m")?"o":"a";
    ?>
    <tr>
            <td><?php echo strtoupper($vogal)?> alun<?php echo $vogal?> se chama <b><?php echo $exibe[1]?></b> e mora na cidade de <b>
                <?php echo $exibe[2]?>
            </td>
            <td><a class="btn btn-primary" href="views/cadastroAtualiza.php?ida=<?php echo $exibe[0]?>">Editar</a></td>
            <td><a href="controllers/deletarAluno.php?ida=<?php echo $exibe[0]?>" class="btn btn-danger">Excluir</a></td>
        </tr>

    <?php } ?>

    </table>

    <?php } ?>

</div>
<?php
include("views/blades/footer.php");
?>