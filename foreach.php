<?php

$arregloColores =array(
    "coche" => "verde",
    "moto" => "rosa",
    "avion" => "gris"
);
  //echo $arregloColores['coche'];

  //es una estructura de control iterativa que usa llaves o
  //asociaciones de datos como indice

  foreach ($arregloColores as $key => $value) {
    echo $key;
    echo " ".$value;
    echo "<br>";
  }

 ?>
