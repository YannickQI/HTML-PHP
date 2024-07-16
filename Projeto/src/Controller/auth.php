<?php

namespace QI\Progeto\Controller;

session_start();

switch ($_GET["operation"]) {
    
    case "login" : login();
        break;

    case "logout" : logout();
        break;

    default: header("location:../../index.html");

}

function login()
{
    if (empty($_POST)) {
        $_SESSION["msg_error"] = "Você errou";
        header("location:../view/massagem.php");
        exit;
    }

    $email = $_POST["userEmail"];
    $senha = $_POST["userSenha"];

$user = array(
    array(
        "name" => "Maria",
        "email" => "maria@gmail.com",
        "senha" => password_hash("1234", PASSWORD_DEFAULT)
    )
);

    foreach ($user as $user) {
        if ($user["email"] == $email && password_verify($senha, $user["senha"])) {
            $_SESSION["user_data"] = $user["name"];
            header("location:../view/telaInicio.php");
            exit;
        }
    }

    $_SESSION["msg_warning"] = "Email e/ou Senha errado";
    header("location:../view/massagem.php");
    exit;

}

function logout () {
    unset($_SESSION["name"]);
    header("location:../../index.html");
    exit;
}