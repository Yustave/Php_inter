<?php

function myfileread($file){
   if(file_exists($file)){
    $handler = fopen($file,'r');
    $size = filesize($file);
    $data = fread($handler,$size);
    echo $data;
   }else{
    throw new Exception ("Files Doesn't Exits",100);
   }
}

try{
    myfileread("hello.txt");
}catch (Exception $e){
    echo $e->getMessage();
}


?>