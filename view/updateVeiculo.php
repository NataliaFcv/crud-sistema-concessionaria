<?php

session_start();

include("../model/conexao.php");
$cmd = "SELECT modelo, quantidade FROM veiculo WHERE id = :id";

$sql = $pdo->prepare($cmd);
$sql->bindParam(":id", $_SESSION['id_veiculo']); 
$sql->execute();


$res = $sql->fetch(PDO::FETCH_ASSOC);
if(is_array($res)){
    $modelo = $res['modelo'];
    $quantidade = $res['quantidade'];
}

$validacao = false;

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

    <title>Atulizar - Veículo</title>
</head>

<body>
    <input type="hidden" value="<?php echo $id;?>">
        <div id="form" >
            <form action="updateVeiculo.php" method="post" class="shadow-lg p-3 mb-5 bg-body rounded">
                
                <h1>Atualizar dados do veículo</h1><br>

                <input type="text" id="modelo" name="modelo" placeholder="Modelo" value="<?php if($res != null){ echo $res['modelo'];}?>">
                <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade de exemplares"  value="<?php if($res != null){ echo $res['quantidade'];}?>"><br><br>
<?php

    include('../controller/updateVeiculo.php');           
?> 

    <input type="submit" class="btn btn-outline-success" value="Atualizar">
</form>
        
        <a href="../index.php">
            <input class="btn btn-default" value="Voltar a pagina inicial" style="margin-bottom: 10px">
        </a>   
    </div>

         

</body>
</html>