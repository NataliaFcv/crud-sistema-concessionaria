<?php

include 'conexao.php';

$sql = $pdo->prepare("INSERT INTO concessionaria(id,cnpj,marca,endereco,telefone) VALUES(null,:cnpj,:marca,:endereco,:telefone)");
$sql->bindParam(":cnpj",$cnpj);
$sql->bindParam(":marca",$marca);
$sql->bindParam(":endereco",$endereco);
$sql->bindParam(":telefone",$telefone);
$sql->execute();

    if($sql->rowCount() != 0)
    {   
        
        echo '<script>alert("A concessionária foi cadastrada com sucesso!"); window.location.replace("../index.php");</script>';

    }

?>