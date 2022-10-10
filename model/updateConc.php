<?php

include 'conexao.php';

$cmd = "UPDATE concessionaria SET cnpj = '" . $cnpj . "', marca = '" . $marca . "', endereco = '" . $endereco . "', telefone = '" . $telefone . "' where id = :id";
$sql = $pdo->prepare($cmd);
$sql->bindParam(":id", $_SESSION['id']);
$sql->execute();



if ($sql->rowCount() != 0) {
    echo '<script>alert("Os dados da concessionária foram atualizados com sucesso!"); window.location.replace("../index.php");</script>';
}
