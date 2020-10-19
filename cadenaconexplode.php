<?php
  $var = "Predo Jimenez Lopez";
  $fecha = "01-05-2017";
  //explode es una funcion que convierte un String
  //a un arreglo dependiendo de la construccion pedida

  $datos = explode(" ", $var);

  /*echo "<pre>";
  print_r($datos);
  echo "</pre>";*/

  $datos2 = explode("-", $fecha);
  echo "El año de la fecha es ". $datos2[2];
  //var_dump($datos);
 ?>
