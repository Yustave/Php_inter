<?php
namespace error; 

class MyException extends Exception{
    public function __construct($message,$code){
        parent::__construct($message,$code);

        $hander = fopen("error log.txt",'a');
        $data = "ErrorMessage =>".$message."Error Number =>".$code. "Time =>" .date("H:i:s Y-m-d",time())."\r";
        fwrite($hander,$data);
        fclose($hander);
    }
}

function myfileread($file){
    if(!file_exists($file)){
        throw new MyException ("Files Doesn't Exits",100);
    }
 }
 
 try{
     myfileread("hello.txt");
 }catch (Exception $e){
    $e->getMessage();
 }
 

?>