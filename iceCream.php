<?php

$flavors = array();
$flavors[] = array("name" => "Cookie Dough",      "in_stock" => true);
$flavors[] = array("name" => "Vanilla",           "in_stock" => false);
$flavors[] = array("name" => "Avocado Chocolate", "in_stock" => false);
$flavors[] = array("name" => "Bacon Me Crazy",    "in_stock" => true);
$flavors[] = array("name" => "Strawberry",        "in_stock" => false);

//add your code below this line

foreach ($flavors as $key => $flavor){
        if($flavors['in_stock']){
        echo $flavor['name'];
          }
       }

?>
