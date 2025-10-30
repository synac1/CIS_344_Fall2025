<?php
    echo "<h1>Hello, World </h1>";
    //this is a comment 
    #this 
    /*
    this is a comment 
     */
    date_default_timezone_set("America/New_York");
    echo date("h:i, jS F");
    $my_word ="Maria";
    echo "<br>Hi ".$my_word;
    echo "<br>";
    echo 40 == "40";   //true 
    echo (40 === "40");  //false
?>