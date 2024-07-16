<?php

namespace QI\Aula4\Controller;

use QI\Aula4\Model\Call;
use QI\Aula4\Model\Equipamentos;
use QI\Aula4\Model\User;
use QI\Aula4\Model\Repository\Connection;
use QI\Aula4\Model\Repository\CallRepository;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

session_start();

switch($_GET["operation"]){

    case"insert": insert();
    break;
    default: $_SESSION["msg_warning"] = "ERROU!";
    header("location:../View/massage.php");
    exit;

}

function insert(){
    
    if(empty($_POST)){
        $_SESSION["msg_warning"] = "ERRO";
        header("location:../View/massage.php");
        exit;
    }

}

$user = new User($_POST["email"]);
$user -> id = 1;
$user -> name = $_POST["name"];
$equipamentos = new Equipamentos(
    $_POST["pcNumber"],
    intval($_POST["floor"]),  
    intval($_POST["room"])
);

$call = new Call($userName,$userEmail,$userEquipamentos);

echo $user -> name = "Maria";
echo $call -> user -> name = "João";

echo $user -> name, "<br>";
echo $call -> user -> name;

$connecton = Connection::getConnection();
var_dump($connecton);

$callRepository = new CallRepository();

try{
    $result = $callRepository -> insert($call);
    if($result){
        $_SESSION["msg_success"] = "SUCESSO";
    }
}catch(Exception $exception){
    $_SESSION["msg_error"] = "ERRO";
    $_SESSION["msg_exception"] = $exception -> getMassage();
}finally{
    header("location:../View/massage.php");
    exit;
}

var_dump($call);
exit;