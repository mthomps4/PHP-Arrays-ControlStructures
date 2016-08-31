<?php
  include 'list.php';
  $status = 'all';
  $field = 'priority';
  $action = 'week';
  $order = array();

if($status == 'all' ){
  $order = array_keys($list);
}else{
  foreach($list as $key => $item){
    if ($item['complete'] == $status) {
      $order[] = $key;
    }
  }
}


switch($action) {
  case 'sort':
      if($field) {//if field is set
        $sort = array();
        foreach ($order as $id){
          $sort[$id] = $list[$id][$field];
        }
        asort($sort); // sorts by value keeps key association the same
        $order = array_keys($sort); //updates array keys from new sort
      }break;

    case 'week':
    foreach ($order as $key => $value){
      if (strtotime($list[$value]['due']) > strtotime("25 July 2016") || !$list[$value]['due']){
        unset($order[$key]);
      }
    }break;
}



echo '<table>';
echo '<tr>';
echo '<th> Title </th>';
echo '<th> Priority</th>';
echo '<th> Due Date</th>';
echo '<th> Complete</th>';
echo '</tr>';

//Shows Items only completed
  foreach ($order as $id){ //array used each item used to var item -- creates assosicative array
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . "</td>\n";
    echo '<td>' . $list[$id]['priority'] . "</td>\n";
    echo '<td>' . $list[$id]['due'] . "</td>\n";
    echo '<td>';
    if ($list[$id]['complete']) {echo "yes";} else{echo "no";}
    echo "</td>\n";
    echo '</tr>';
  }
echo '</table>';




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
