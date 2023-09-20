<?php

// $this => Pointer to Function call Making

class Test{
    public $name = "Yustave";

    public function hey(){
        $this->name = "Yustave La Van";
    }
}

$aa = new Test;
$aa->hey();
echo $aa->name;

echo "<br>";

$bb = new Test;
echo $bb->name;

// both $aa and $bb are copy of class Tset.That's why their changes doesn't effect original class and each other.

?>