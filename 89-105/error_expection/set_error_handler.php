<?php

function MyerrorHandler(){
    throw new EXception("FIlE NOT FOUND");
}

set_error_handler("MyerrorHandler");

try{
    include "hello.php";
}catch(Exception $e){
    echo $e->getMessage();
}

?>