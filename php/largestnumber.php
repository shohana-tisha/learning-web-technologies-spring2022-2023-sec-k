<?php


function number($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  elseif ($y >= $x && $y >= $z)
    $max = $y;
  else 
    $max = $z;
  
  echo "Largest number among $x, $y and $z is: $max\n";
}

number(100, 50, 25);

?>