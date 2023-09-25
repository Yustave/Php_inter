<?php
require_once("autoload.php");

class index{
    public function __construct(){
        Loader::load('helper');
        $helper = new helper("helper");
        $helper->sayyourname();

        Loader::load('hello/hello');
        $hello = new hello;
        $hello->hi();
    }
}

new index;

?>