<?php 
    $filename = "my_order.txt";
  
    $file     = fopen($filename, 'r'); //read only
    if ($file){
        
        while(($line = fgets($file) )!==false){
            echo $line . '<br>';
        }

        fclose($file);
    }else{
        echo 'Error: Unable to open file';
    }
    // if(file_exists($filename)){
    //     readfile($filename);
    // }else{
    //     echo $filename." Does not exist ";
    // }

    #--------------------------------------------
    $my_file = fopen("my_text.txt", "w");
    if ($my_file){
        $message = "Hello, from another world";
        fwrite($my_file, $message);
        fclose($my_file);
    }

?>