<?php
require_once("vendor/autoload.php");
class index{
    public function __construct(){
    
        $helper = new Helper;
        $helper->sayHelpername();

        echo"<br><hr><br>";

        $filter = new Filter;
        $filter->sayFiltername();

        echo"<br><hr><br>";

        $home = new Home;
        $home->sayHomename();

        echo"<br><hr><br>";

        $Start = new Start;
        $Start->sayStartname();

        echo"<br><hr><br>";

        $name = new End;
        $name->sayEndname();
    }

}

new index;

?>
