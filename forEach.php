<?php
  include 'list.php';

  foreach($list as $key => $item){
    echo $key . ' = ' . $item['title'] . "<br>\n";
  }

  echo "<br>";


echo '<table>';
echo '<tr>';
echo '<th> Title </th>';
echo '<th> Priority</th>';
echo '<th> Due Date</th>';
echo '<th> Complete</th>';
echo '</tr>';

  foreach ($list as $item){ //array used each item used to var item -- creates assosicative array
    echo '<tr>';
    echo '<td>' . $item['title'] . "</td>\n";
    echo '<td>' . $item['priority'] . "</td>\n";
    echo '<td>' . $item['due'] . "</td>\n";
    echo '<td>';
    if ($item['complete']) {echo "yes";} else{echo "no";}
    echo "</td>\n";
    echo '</tr>';
  }
echo '</table>';

?>
