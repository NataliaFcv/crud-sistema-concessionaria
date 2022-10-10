<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $res = null;

    if (!empty($_POST)) {
        $validacao = True;

        if (!empty($_POST['cnpj'])) {
            $cnpj = $_POST['cnpj'];
        } else {

            $validacao = False;
        }

        if (!empty($_POST['marca'])) {
            $marca = $_POST['marca'];
        } else {

            $validacao = False;
        }

        if (!empty($_POST['endereco'])) {
            $endereco = $_POST['endereco'];
        } else {

            $validacao = False;
        }

        if (!empty($_POST['telefone'])) {
            $telefone = $_POST['telefone'];
        } else {
            $validacao = False;
        }
    }


    try {
        $acao = true;

        if ($validacao) {
            include '../model/updateConc.php';
        }
    } catch (Exception $e) {
        echo $e;
    }
}
