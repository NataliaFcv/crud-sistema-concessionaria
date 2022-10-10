<?php

include 'conexao.php';

$cmd = "UPDATE veiculo SET modelo = '".$modelo."', quantidade = '".$quantidade."' where id = :id";
$sql = $pdo->prepare($cmd);
$sql->bindParam(":id", $_SESSION['id_veiculo']);
$sql->execute();


if($sql->rowCount() != 0)
{   
    echo '<script>alert("Os dados do veículo foram atualizados com sucesso!"); window.location.replace("../index.php");</script>';
}

?>