<?php

namespace QI\Aula4\Model\Repository;

use \PDO;

class Connection{
    private static $connection;

    private function _construct(){}

    public static function getConnection(){
        if(self::$connection = null){
            self::$connection = new PDO(DB_URL, DB_USER, DB_PASSWORD);
        }
        return self::$connection;
    }
}