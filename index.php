<?php
require('controller/createConc.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="icon" type="imagem/png" href="view/img/icon.png" />

    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Início</title>

    
</head>
<body >
    
    <div class="container">
          <div class="jumbotron white">
            <div class="row">
                <img src="view/img/icon.png" style="margin-left: 60px">
                <h2 style="margin-left: 10px">Listagem de concessionária</h2>
            </div> 

            <div>
                <a href="view/createConc.php">
                    <input type="button" class="btn btn-outline-dark" value="Cadastrar concessionaria" style="width:auto; margin-left: 800px;"><br>
                </a>
            </div>
    </div>
    
<div>
        <table class="table">
            <thead>
                <th scope="col" style="width: 160px">Id</th>
                <th scope="col" style="width: 160px">CNPJ</th>
                <th scope="col" style="width: 160px">Marca</th>
                <th scope="col" style="width: 160px">Endereço</th>
                <th scope="col" style="width: 160px">Telefone</th>
                <th scope="col" >Ações</th>
            </thead>

            <tbody>

                <?php

                    include 'model/conexao.php';

                    $sql = $pdo->query('SELECT * FROM concessionaria ORDER BY id ASC');

                    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';
                        echo '<th scope="col">'.$row['id'].'</th>';
                        echo '<td>'. $row['cnpj'].'</td>';
                        echo '<td>'. $row['marca'].'</td>';
                        echo '<td>'. $row['endereco'].'</td>';
                        echo '<td>'. $row['telefone'].'</td>';
                        echo '<td style="width: 20px;">';
                        echo '<a class="btn btn-info" href="view/selectConc.php?id='.$row['id'].'">Visualizar Concessionaria</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>

            </tbody>
        </table>        
      </div>
   </div>   
</body>
</html>