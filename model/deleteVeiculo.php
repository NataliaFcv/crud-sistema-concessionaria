<?php  

include('conexao.php');

$sql = $pdo->prepare("DELETE FROM veiculo WHERE id = :id");
$sql->bindParam(":id", $_SESSION['id_veiculo']);
$sql->execute();

if($sql->rowCount() != 0){

    echo '<script>alert("O veículo foi deletado com sucesso!"); window.location.replace("../index.php");</script>';

}

?>