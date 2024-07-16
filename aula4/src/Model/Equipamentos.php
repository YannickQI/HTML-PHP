<?php

namespace QI\Aula4\Model;

class Equipamento{
    private $pcNumber;
    private $floor;
    private $room;

    /**
     * @param string $pcNumber
     * @param int $floor
     * @param int $room
     */

    public function _construct($pcNumber, $floor, $room){
        $this -> pcNumber = $pcNumber;
        $this -> floor = $floor;
        $this -> room = $room;
    }
}