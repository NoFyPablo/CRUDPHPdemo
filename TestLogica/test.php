
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function multiplos($j){
        $n1 = 3;
        $n2 = 5;
        $res1 = 0;
        $res2 = 0;
        $suma1 = 0;
        $suma2 = 0;
        $ant1 = 0;
        $ant2 = 0;
        $sumatoria1 = 0;


        $j=intval(trim($j));
          for ($i=1; $res1 <= $j || $res2 <= $j; $i++) {
              $ant1 = $res1;
              $ant2 = $res2;

              $res1 = $n1 * $i;
              $res2 = $n2 * $i;

              if ($res1 >= $j) {
                echo "</br>";

              }else {
                echo "3 * $i = $res1 </br></br>";
                $suma1 = $ant1 + $res1;

              }

              if ($res2 >= $j) {
                echo "</br>";

              }else {
                echo "5 * $i = $res2 </br></br>";
                $suma2 = $ant2 + $res2;
              }
          }
          echo "$suma1 , $suma2 </br>";
          return $suma1+$suma2;
      }
      echo "prueba para los multiplos de 3 y 5 menores que 10 </br></br>";
      echo multiplos(10)."</br>";

     ?>
  </body>
</html>
