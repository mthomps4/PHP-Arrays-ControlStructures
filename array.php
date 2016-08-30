<?php
$learn = array('Conditionals', 'Arrays', 'Loops');

array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'CSS');
asort($learn);
var_dump($learn);
sort($learn);
echo implode("\n", $learn);

//Removing
//array_shift($learn); //removes first and holds onto it to use
echo "\n" . "you removed " . array_shift($learn); //removes first
echo "\n" . "you removed " . array_pop($learn); //same with pop but last instead of first

unset($learn[1], $learn[3]); //can unset more than one at a time. DOES NOT UPDATE INDEX KEYS After removed.

$learn = array_values($learn); //resets keys

//unset($learn); //array no longer will exist

//Editing
$learn[0] = "Email";

// array_splice
// array_merge
// array_combine

//Color Example
$colors = array("Red","Green","Blue");
//add modifications below this line
array_push($colors, "Black");
array_unshift($colors, "Yellow");

$colors[1] = "Magenta";
$colors[3] = "Cyan";
unset($colors[2]);

?>
