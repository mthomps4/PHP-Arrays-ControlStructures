<?php
$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);
//add your loop below this line

for ($i=1; $i<=100; $i++){

  if (isset($facts[$i])) {
    echo "$i $facts[$i]\n";
  }else{echo "$i\n";}

}

?>
