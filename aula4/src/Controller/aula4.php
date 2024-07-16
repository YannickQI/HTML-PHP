<?php

session_start();

switch($_GET["operation"]){
    case"login" : login();
    break;
    case"logout" : logout();
    break;

    default: $_SESSION["msg_warning"] = "Não pode";
    header("location:../View/massage.php");
    exit;
}

function login(){
    if(empty($_POST)){
        $_SESSION["msg_error"] = "Você errou!";
        header("location:../View/massage.php");
        exit;

    }

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $user = array(
        array(
            "nome" => "Mariana",
            "email" => "mariana@gmail.com",
            "senha" => password_hash("1234", PASSWORD_DEFAULT)
        )
    );

    foreach($user as $user){
        if($user["email"] == $email && password_verify($senha, $user["senha"])){
            $_SESSION["userData"] = $user;
            header("location:../View/dashboard.php");
            exit;
        }
    }

    $_SESSION["msg_warning"] = "Algo está errado";
    header("location:../View/massage.php");
    exit;
}

function logout () {
    unset($_SESSION["nome"]);
    header("location:../../index.html");
    exit;
}
