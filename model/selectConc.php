<?php 

include 'conexao.php';

$sql = $pdo->prepare("SELECT * FROM veiculo WHERE id_conc = :id_conc");
$sql->bindParam(":id_conc", $_SESSION['id']);
$sql->execute(); 

?>