<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST)) {
        $validacao = True;

        if (!empty($_POST['modelo'])) {
            $modelo = $_POST['modelo'];
        } else {
            $validacao = False;
        }

        if (!empty($_POST['quantidade'])) {
            $quantidade = $_POST['quantidade'];
        } else {
            $validacao = False;
        }


        if (!empty($_POST['id_conc'])) {
            $id_conc = $_POST['id_conc'];
        } else {
            $validacao = False;
        }
    }

    if ($validacao) {
        include("../model/createVeiculo.php");
    }
}
