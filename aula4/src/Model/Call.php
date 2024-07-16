<?php

namespace QI\Aula4\Model;

class Call{
    private $id;
    private $userName;
    private $userEmail;
    private $userEquipamentos;

    /**
     * @param User $userName
     * @param string $userEmail
     * @param Equipamentos $userEquipamentos
     */

    public function _construct($userEquipamentos, $userEmail, $userName){
        $this -> userName = $userName;
        $this -> userEmail = $userEmail;
        $this -> userEquipamentos = $userEquipamentos;
    }

    public function _get($attribute){
        return $this -> $attribute;
    }

    public function _set($attribute, $value){
        $this -> $attribute = $value;
    }

}