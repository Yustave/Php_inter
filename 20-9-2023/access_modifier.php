<?php

//asscess modifier
// public private protected
// public => anyone acn access
// private => only class
// proted => extended class or sub class

class Test{
    public $name = "yustave"; #if private or protected are used line 14 can't access data 
}

$obj = new Test();
echo $obj->name;


?>