<?php 

include("../model/conexao.php");

$sql = $pdo->prepare("INSERT INTO veiculo(id,modelo,quantidade,id_conc) VALUES(null,:modelo,:quantidade,:id_conc)");
$sql->bindParam(":modelo",$modelo);
$sql->bindParam(":quantidade",$quantidade);
$sql->bindParam(":id_conc",$id_conc);

$sql->execute();

if($sql->rowCount() != 0)
{   
    
    echo '<script>alert("O veículo foi cadastrado com sucesso!"); window.location.replace("../index.php");</script>';

} 

?>