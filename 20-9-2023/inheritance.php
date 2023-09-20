<?php
class Member{


    var $name = "Yustave";
    var $age  = "19";
    var $subject = "Java";

    public function __construct(){
        echo "Member class is working";
    }

    public function Name(){
        echo $this->name;
    }

    public function FrinendCount(){
        echo "Yustave have ..... Friends";
    }
}

class Gold_Member extends Member{
    public function __construct(){
        parent::__construct();
         #when child has constructor,need to invoke parent's to work <only whenm child class was invoked alone >
        echo "Gold_Member class is working";
    }

    public function FrinendCount(){   #overwriting
        echo "He has .... friends";
    }
}

$obj =new Gold_Member;
$obj->Name();
$obj->FrinendCount();


?>