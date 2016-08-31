<?php
$learn = array('Conditionals', 'Arrays', 'Loops');
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'CSS');

$count = 0;

while((list($key, $val) = each($learn)) && $count++ < 2 ){
  echo "$key => $val\n";
}

?>
