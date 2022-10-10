<?php 


        try{

            $pdo = new PDO("mysql:host=127.0.0.1:3306;dbname=sistem_concessionaria","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){

            echo 'Error: '. $e->getMessage();

        }


?>



