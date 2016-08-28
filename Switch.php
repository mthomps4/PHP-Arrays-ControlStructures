<?php

$today = date ('l');

switch($today)
{
  case "Monday":
         echo "Monday Night C#";
         break;
     case "Tuesday":
         echo "Tuesday Night PHP";
         break;
     case "Wednesday":
         echo "Wednesday Night JavaScript";
         break;
     case "Thursday":
         echo "Thursday Night Frameworks";
         break;
     case "Friday":
         echo "Friday Night Date Night";
         break;
     case "Saturday":
         echo "Bake on Saturday";
         break;
     case "Sunday":
         echo "Rest on Sunday";
         break;
     default:
         echo "I don't know what day it is";
         break;
}

?>
