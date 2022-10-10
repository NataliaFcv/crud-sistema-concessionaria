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
    
    <title>Cadastrar - Veículo</title>
</head>

<body>

    <div id="form" >
        <form action="../controller/createVeiculo.php" method="post" class="shadow-lg p-3 mb-5 bg-body rounded">
            
            <h1>Cadastrar veículo</h1><br>

            <input type="text" id="modelo" name="modelo" placeholder="Modelo">
            <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade de exemplares">
            <input type="number" id="id_conc" name="id_conc" placeholder="ID(Concessionaria)"> <br><br>    
                           
            <input type="submit" id="btn-cadastro" class="btn btn-outline-success" value="Cadastro" style="width: 100%;"><br><br>
        </form>
        
         <a href="../index.php">
           <input class="btn btn-default" value="Voltar a pagina inicial" style="margin-bottom: 10px">
        </a>     
    </div>
   
</body>
</html>