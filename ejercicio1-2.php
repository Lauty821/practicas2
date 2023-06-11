<?php

$long1=$_POST["long1"];
$long2=$_POST["long2"];
$long3=$_POST["long3"];

$resultado=new Triangulo(intval($long1), intval($long2), intval($long3));
echo ("La distancia es de: ".$resultado->Calculo());
?>