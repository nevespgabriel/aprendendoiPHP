<?php
    session_start();

    if(!isset($_SESSION["dados"])){
        $_SESSION["dados"] = [];
    }
    $soma = $_POST["semana1"] + $_POST["semana2"] + $_POST["semana3"] + $_POST["semana4"];
    $_SESSION["dados"][] = [
        "nome" => $_POST["nome"],
        "total_mes" => $soma
    ];

    require("views/relatorio.view.php");
