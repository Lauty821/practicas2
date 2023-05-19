<?php

class Triangulo
{
    private $long1;
    private $long2;
    private $long3;

    function __construct($long1, $long2, $long3)
    {
        $this->long1=$long1;
        $this->long2=$long2;
        $this->long3=$long3;
    }

    function Calculo($long1, $long2, $long3)
    {
        $long1exacta=$this->long1*2;
        return $long1exacta;

        $long3exacta=$this->$long3*2;
        return $long3exacta;

        $prelong2=$this->$long3exacta-$this->$long1exacta;
        return $prelong2;

        $long2exacta=$this->$prelong2/2;
        return $long2exacta;
    }
}

?>