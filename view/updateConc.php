<?php

session_start();

include("../model/conexao.php");
$cmd = "SELECT cnpj, marca, endereco, telefone FROM concessionaria WHERE id = :id";

$sql = $pdo->prepare($cmd);
$sql->bindParam(":id", $_SESSION['id']);
$sql->execute();


$res = $sql->fetch(PDO::FETCH_ASSOC);
if (is_array($res)) {
    $cnpj = $res['cnpj'];
    $marca = $res['marca'];
    $endereco = $res['endereco'];
    $telefone = $res['telefone'];
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="img/icon.png" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Atualizar - Concessionaria</title>
</head>

<body>

    <div id="form">
        <form action="updateConc.php" method="post" class="shadow-lg p-3 mb-5 bg-body rounded">
            <!-- <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> -->

            <h1>Atualizar dados da concessionária</h1><br>

            <div>
                <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" maxlength="5" minlength="5" value="<?php if ($res != null) {
                                                                                                                    echo $res['cnpj'];
                                                                                                                } ?>">
                <input type="text" id="marca" name="marca" placeholder="Marca" value="<?php if ($res != null) {
                                                                                            echo $res['marca'];
                                                                                        } ?>">
                <input type="text" id="endereco" name="endereco" placeholder="Endereço" value="<?php if ($res != null) {
                                                                                                    echo $res['endereco'];
                                                                                                } ?>">
                <input type="text" id="telefone" name="telefone" placeholder="Telefone" maxlength="9" minlength="9" value="<?php if ($res != null) {
                                                                                                                                echo $res['telefone'];
                                                                                                                            } ?>"><br>

                <?php
                include('../controller/updateConc.php');
                ?>

                <input type="submit" class="btn btn-outline-success" value="Atualizar">
        </form>
    </div>

    <a href="../index.php">
        <input class="btn btn-default" value="Voltar a pagina inicial" style="margin-bottom: 10px">
    </a>

</body>

</html>