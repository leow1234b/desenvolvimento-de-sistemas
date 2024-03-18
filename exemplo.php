<?php

 echo "<h3>while</h3>";

 echo "0 a 50 - 2 em 2:";
 $a = 0;
  while ($a <= 50):
     echo " {$a} ";
     $a += 2;
  endwhile;

  $numero = 20;
  do { 
    echo "numero: {$numero} <br>";
    $numero += 3;
  }while($numero < 85);
  
  ?>