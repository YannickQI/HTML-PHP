<?php

namespace QI\Aula4\Model\Repository;
use QI\Aula4\Model\Call;
use \PDO;

class CallRepository{
    private $connection;

    public function _construct(){
        $this -> connection = Connection :: getConnection();
    }

    /**
     * @param Call $call
     * @param int 
     */
    public function insert($call){
        $nomeQualquer = $this -> connection -> prepare("isert into calls values (null,?,?,?,?,?)");
        $nomeQualquer -> bindParam(1,$call->user->id,PDO::PARA_INT);
        $nomeQualquer -> bindParam(2,$call->equipamento->pcNumber);
        $nomeQualquer -> bindParam(3,$call->userName);
        $nomeQualquer -> bindParam(4,$call->userEmail);
        $nomeQualquer -> bindParam(5,$call->userEquipamentos);
        return $nomeQualquer -> execute();

    }
}