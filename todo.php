<?php
$list[] = array(
  'title' => 'Laundry',
  'priority' => 2,
  'due' => '',
  'complete' => true,
);

$list[] = [
  'title' => 'Clean out refrigerator',
  'priority' => 3,
  'due' => '07/30/2016',
  'complete' => false,
];//replaced array() with []

//$list = array($task1, $task2); subbed for $list[]

//var_dump($list);

echo $list[0]['title'];

//PHP SORT ARRAY OPTIONS 

// Function name	Sorts by	Maintains key association	Order of sort	Related functions
// array_multisort()	value	associative yes, numeric no	first array or sort options	array_walk()
// asort()	value	yes	low to high	arsort()
// arsort()	value	yes	high to low	asort()
// krsort()	key	yes	high to low	ksort()
// ksort()	key	yes	low to high	asort()
// natcasesort()	value	yes	natural, case insensitive	natsort()
// natsort()	value	yes	natural	natcasesort()
// rsort()	value	no	high to low	sort()
// shuffle()	value	no	random	array_rand()
// sort()	value	no	low to high	rsort()
// uasort()	value	yes	user defined	uksort()
// uksort()	key	yes	user defined	uasort()
// usort()	value	no	user defined	uasort()

?>
