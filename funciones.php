  <?php
    function funcion()
    {
      $r=$array(1);

      return $r;
    }

    function funcion2($varlorA,$valorB,$opcion)
    {
      switch ($opcion) {
        case 'SUMA':
          echo $valorA + $valorB;
        break;
        case 'RESTA':
        echo $valorA - $valorB;
        break;
        case 'MULTIPLICACION':
          echo $valorA / $valorB;
          break;
          case 'DIVISION':
          echo $valorA * $valorB;
            break;
        default:

        break;
      }
    }

echo funcion2(5,10,'SUMA');

 ?>
