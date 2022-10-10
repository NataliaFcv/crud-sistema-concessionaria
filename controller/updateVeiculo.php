<?php

/* include('../controller/updateConcessionaria.php'); */

  if($_SERVER["REQUEST_METHOD"] == "POST"){

        $res = null;

        if(!empty($_POST))
        {
            $validacao = True;
    
            if(!empty($_POST['modelo'])){
                $modelo = $_POST['modelo'];
    
            
            }else{
    
                $validacao = False;
            }
    
            if(!empty($_POST['quantidade'])){
                $quantidade = $_POST['quantidade'];
    
            }else{
    
                $validacao = False;
            }
}

        }


    try{   
        $acao = true;

            if($validacao){   
                    
                include '../model/updateVeiculo.php';
            }

    }catch(Exception $e){
    echo $e;
    }
 
             
?> 