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

    <title>Deletar - Veículo</title>
</head>

<body>

    <div class="conteiner">
        <form class="form-horizontal" action="deleteVeiculo.php" method="post">
            <div class="row">
                <h1 style="margin-left:15px">Excluir dados.</h1>
            </div>

            <div class="alert alert-danger">Deseja excluir o veículo cadastrado no sistema?</div>

            <div class="form actions">
                <button type="submit" class="btn btn-danger" value="Sim" style="width: 200px;">Sim

                    <?php

                    include('../model/conexao.php');

                    $sql = $pdo->prepare("DELETE FROM veiculo WHERE id = :id");
                    $sql->bindParam(":id", $_GET['id']);
                    $sql->execute();

                    if ($sql->rowCount() != 1) {

                        echo '<script>alert("O veículo foi deletado com sucesso!"); window.location.replace("../index.php");</script>';
                    }
                    ?>
                </button>

                <a href="../index.php" type="btn" class="btn btn-default">Não</a>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>