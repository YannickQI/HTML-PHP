<?php

namespace QI\SistemaDeChamados\Model;

class Equipment
{
    private $id;
    private $floor;
    private $room;

    public function __construct($floor,$room){
        $this->floor = $floor;
        $this->room = $room;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}
