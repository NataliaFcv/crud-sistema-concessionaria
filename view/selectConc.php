<?php
session_start();
$_SESSION['id']  = $_GET['id'];
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

    <title>Visualização - Concessionaria</title>
</head>
<body>

<input type="hidden" name="id" value="<?php echo $id;?>">

    <div class="container">
        <div class="jumbotron white">

          <div class="row">
            
              <img src="img/icon.png" style="margin-left: 60px"> 
              <h2 style="margin-left: 10px">Concessionaria </h2><br>
              
              <div style="margin-left: 525px; margin-top: 0px">
                <a href="../index.php" style="color: black; margin-left: 10px;">
                    Voltar a página inicial
                </a><br><br>

                <div>
                    <a class="btn btn-warning" href="updateConc.php?id=<?php echo $_SESSION['id']; ?>">Atualizar</a>
                    <a class="btn btn-danger" href="deleteConc.php?id=<?php echo $_SESSION['id'];?>" style="width: 87.2167px;">Excluir</a>
                </div><br>

                <div> 
                    <a href="createVeiculo.php?id=<?php echo $_SESSION['id']; ?>" style="width: 180px; " class="btn btn-outline-dark" >Cadastrar Veículo</a>
                </div>

            </div>
    </div> 
</div> 

    <div>      
        
 <!--        <div> 
            <a href="createVeiculo.php?id=<?php echo $_SESSION['id']; ?>" style="width: 150.117px; margin-left:940px" class="btn btn-outline-dark" >Cadastrar Veículo</a>
        </div>  -->

        <table class="table">
            <thead>
                <th scope="col">Id (Veículo)</th>
                <th scope="col">Id(Concessionaria)</th>
                <th scope="col">Modelo</th>
                <th scope="col">Quantidade de exemplares</th>
                <th scope="col" >Ações</th>
            </thead>

            <tbody>

                <?php
                    include '../model/selectConc.php';

                    while($row = $sql->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '<tr>';
                        echo '<th scope="row">'.$row['id'].'</th>';
                        echo '<td>'. $row['id_conc'].'</td>';
                        echo '<td>'. $row['modelo'].'</td>';
                        echo '<td>'. $row['quantidade'].'</td>';
                        echo '<td style="width: 100px">';
                        echo '<a class="btn btn-info" href="selectVeiculo.php?id_veiculo='.$row['id'].'">Visualizar Veículos</a>';
                    }
               ?>
            </tbody>
        </table>        
   </div>
 
</body>
</html>