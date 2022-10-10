<?php
session_start();
$_SESSION['id_veiculo']  = $_GET['id_veiculo'];
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

    <title>Visualização - Veículo</title>
</head>
<body>

<input type="hidden" name="id" value="<?php echo $id;?>">

    <div class="container">
        <div class="jumbotron white">
            <div class="row">
                <img src="img/icon.png" style="margin-left: 60px"> 
                <h2 style="margin-left: 10px">Veículo: </h2><br><br>

                <div style="color: black; margin-left: 630px;">
                    <a href="../index.php" style="color: black;">Voltar a página inicial</a>
                </div> 
            </div>
    <form action="visualizacaVeiculo.php" method="post" style="background-color:rgba(00000,00000,00000, 0.0); border:none;">
            
              <?php 

                include("../model/selectVeiculo.php");

               /*  $sql = $pdo->prepare("SELECT * FROM veiculo WHERE id = :id");
                $sql->bindParam(":id", $_SESSION['id_veiculo']);
                $sql->execute(); */

                while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo '<div style="border: solid white; padding: 10px">';
                    echo '<ul style="font-size: 30px;">';

                    echo '<li><strong>ID:</strong> '.$row['id'].'</li>';
                    echo '<hr style="background: rgba(0,0,0,0.7); margin-left: 0px; width: 830px">';
                    echo '<li><strong>ID CONCESSIONÁRIA:</strong> '. $row['id_conc'].'</li>';
                    echo '<hr style="background: rgba(0,0,0,0.7); margin-left: 0px; width: 830px">';
                    echo '<li><strong>MODELO:</strong> '. $row['modelo'].'</li>';
                    echo '<hr style="background: rgba(0,0,0,0.7); margin-left: 0px; width: 830px">';
                    echo '<li><strong>QUANTIDADE:</strong> '. $row['quantidade'].'</li>';
                    echo '</ul>';
                    echo '</div><br>';
                }
                ?> 
                
            <div style="margin-left: 760px; margin-top: 0px">
                <a class="btn btn-warning" href="updateVeiculo.php?id=<?php echo $_GET['id_veiculo']; ?>">Atualizar</a>
                <a class="btn btn-danger" href="deleteVeiculo.php?id=<?php echo $_GET['id_veiculo'];?>" style="width: 87.2167px;">Excluir</a>
            </div>         
    </form>
</div>  
</div> 
</body>
</html>