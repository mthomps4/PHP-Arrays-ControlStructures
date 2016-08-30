<?php
$iceCream = [
'Matt' => "Strawberry \n",
'Emily' => "Raspberry Chip \n",
'Adam' => "Chocolate \n",
'' => 'Vanilla'
];

echo $iceCream['Matt'];

$iceCream['Joe']="Cookie Dough \n";

echo $iceCream['Joe'];


$keys = array(
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
);

var_dump($keys);

?>
