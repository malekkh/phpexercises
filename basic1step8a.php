<?php
 $indexedArr=array("Eggs", "Milk", "Cheese"," Water Pack", "Tissues", "Watermelon");
 echo "Hello Sir, do you have " .$indexedArr[0]."," .$indexedArr[1].", and " .$indexedArr[2]." ? Also if you sell fruits can I find a " .$indexedArr[count($indexedArr)-1] ;
$multidimArr = array (
  array("balade","mazare3"),
  array("fresh","taanayel"),
  array("tanourine","rim"),
);
 echo "Hey Sir, Please I need 1 pack of ".$multidimArr[0][0]." eggs and 3 " .$multidimArr[2][1]. " Water Pack."
?>