<?php
error_reporting(0);
try{
    if(fopen('txt.txt','r')){
        echo "success";
    }else{
        throw new Exception("File can't be read");
    }
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "<br>End here";
}

?>