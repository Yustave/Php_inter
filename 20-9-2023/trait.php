<?php
// use to extend two or more class

trait Member{
    var $Name = "Yustave";
}

trait outsider{
    var $Full_Name = "Yustave La Van";
}

trait mama{
    use Member,outsider;
}

class Test{
    use mama;
}

$obj = new Test();
echo $obj->Name;
echo $obj->Full_Name;



?>