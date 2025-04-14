<?php
    session_start();

    if(!isset($_SESSION["dados"])){
        $_SESSION["dados"] = [];
    }
    $_SESSION["dados"][] = [
        "nome" => $_POST["nome"],
        "semana1" => $_POST["semana1"],
        "semana2" => $_POST["semana2"],
        "semana3" => $_POST["semana3"],
        "semana4" => $_POST["semana4"],
    ];

    require("views/relatorio.view.php");
