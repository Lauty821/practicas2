<?php

require_once 'ejercicio1-2.php';

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

    function Calculo()
    {
        //De los 3 lados selecciono el mayor.
        $mayor=max($this->long1, $this->long2, $this->long3);
        echo $this->long1.", ".$this->long2.", ".$this->long3."</br>";
        echo "El número mayor es ".$mayor."</br>";

        //la suma de los otros lados
        $suma=$this->long1+$this->long2+$this->long3-$mayor;
        echo "La suma de todos los lados es ".$suma."</br>";

        //Diferencia 
        //Utilizo ABS para sacar el valor absoluto.
        $diferencia=abs($this->long1-$this->long2-$this->long3+$mayor);
        echo "Su diferencia es ".$diferencia."</br>";

        if($suma>=$mayor && $mayor>$diferencia)
        {
            echo "Son los lados de un triangulo";

            if(($this->long1==$this->long2) && ($this->long1==$this->long3) && ($this->long2!=$this->long1))  
            {
                echo "Es un triangulo Isosceles.";
            }
            elseif(($this->long2==$this->long1) && ($this->long2==$this->long3) && ($this->long3!=$this->long1))
            {
                echo "Es un triangulo Isosceles.";
            }
            elseif(($this->long3==$this->long1) && ($this->long3==$this->long2) && ($this->long2!=$this->long3))
            {
                echo "Es un triangulo Isosceles.";
            }
            elseif (($this->long1==$this->long2) && ($this->long1==$this->long3) && ($this->long2==$this->long3)) 
            {
                echo "Es un triangulo Equilatero.";
            }
            elseif (($this->long1==$this->long2) or($this->long1==$this->long3)  or  ($this->long2==$this->long3)) 
            {
                echo "Es un triangulo Escaleno.";
            }
        }
        else
        {
            echo "No corresponden a los lados de un triangulo.";
        }
    }
}

$triangulo = new Triangulo($long1, $long2, $long3);
$triangulo->Calculo();
?>