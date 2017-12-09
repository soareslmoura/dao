<?php

spl_autoload_register(function($class_name){
    
    $filename = "model".DIRECTORY_SEPARATOR.$class_name.".class.php";
   
    if(file_exists($filename)){
        require_once($filename);
    }
    
    
});


?>