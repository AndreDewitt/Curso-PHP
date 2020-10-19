<?php
//es un tipo de dato que puede contener n datos
//apartir de un almacenamiento indice
  $arreglo = array();
  $arreglo[0] = 1;
  $arreglo[1] = "hola";
  $arreglo[2] = 2;
  $arreglo[3] = "Me llamo";
  $arreglo[4] = 3;
  $arreglo[5] = "Andres";
  $arreglo[6] = 4;
  $arreglo[7] = ":)";

  //echo $arreglo[2]  ;


for ($i=0; $i <count($arreglo) ; $i++) {
  echo $arreglo[$i];
  echo "<br>";
}
?>
