<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST))
    {
        $validacao = True;

        if(!empty($_POST['cnpj'])){
            $cnpj = $_POST['cnpj'];

           
        }else{

            $validacao = False;
        }

        if(!empty($_POST['marca'])){
            $marca = $_POST['marca'];

        }else{

            $validacao = False;
        }

        if(!empty($_POST['endereco'])){
            $endereco = $_POST['endereco'];

        }else{

            $validacao = False;
        }

        if(!empty($_POST['telefone'])){
            $telefone = $_POST['telefone'];

        }else{
            $validacao = False;
        }
    }

            if($validacao){


                include '../model/createConc.php';
                
/*             include '../model/conexao.php';

            $sql = $pdo->prepare("INSERT INTO concessionaria(id,cnpj,marca,endereco,telefone) VALUES(null,:cnpj,:marca,:endereco,:telefone)");
            $sql->bindParam(":cnpj",$cnpj);
            $sql->bindParam(":marca",$marca);
            $sql->bindParam(":endereco",$endereco);
            $sql->bindParam(":telefone",$telefone);
            $sql->execute();

                if($sql->rowCount() != 0)
                {   
                    
                    echo '<script>alert("A concessionária foi cadastrada com sucesso!"); window.location.replace("../index.php");</script>';

                } */
            }
}
?>