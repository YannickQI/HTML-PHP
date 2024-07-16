<?php

namespace QI\Aula4\Model;

class User{
    private $id;
    private $name;
    private $email;
    private $senha;

    /** <-tem que user isso
     * @param string $email
     * */

    public function _construct($email){
        $this -> email = $email;
    }
}