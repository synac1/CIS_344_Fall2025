<?php
//Grab the values that have been sent from the html form
 $product = $_POST['product_name'];  
 $qty     = $_POST['product_quantity'];

 echo '<h1>You have bought '.$qty.' '.$product.'</h1>';

?>