<?php

include 'conexao.php';

$sql = $pdo->prepare("DELETE FROM concessionaria WHERE id = :id");
$sql->bindParam(":id", $_SESSION['id']);
$sql->execute();

if($sql->rowCount() != 1){

    echo '<script>alert("A concessionária foi deletada com sucesso!"); window.location.replace("../index.php");</script>';

    }

?>