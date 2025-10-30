<?php
//associated array
$prices['Tires'] = 100;
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;

foreach ($prices as $product => $price){
  echo $product." - ".$price;
  echo "<br />";
}

?>