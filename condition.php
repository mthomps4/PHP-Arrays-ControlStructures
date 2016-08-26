<?php
$a = 5;
$b = 2;

if ($a == $b) {
    echo ' values are equal ';
}
elseif ($a < $b)
  { echo "$a is less than $b";}
else
  { echo "$a is greater than $b";}

$num = 20;
if ($num == 10 || is_string($num)){
  echo "'num' is 10 or a string";
}else {
  echo " 'num' is Not 10 or a string";
}
?>
