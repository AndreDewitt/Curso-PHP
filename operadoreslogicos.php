<?php
  //los operadores logicos sirven para validar expresiones
  //tal es el caso del operador and que sirve para validar
  //una sentencia u otra

  $resultado = 50;

  if ($resultado < 51 and $resultado > 49) {
    echo "es un numero 50 valido";
    echo "<br>";
  }
/*


$dato=5;

if ($dato != 10) {
      echo " es un buen dato";
}

$dato2 = false;

if (!$dato2) {
  echo " no es verdadero";
}
*/

$edadvalida= 25;
if ($edadvalida > 18 or $edadvalida < 26) {
  echo " edad validad";
}
 ?>
