<?php

class Test{
    private $int = 123;
    public function setter($data){  #assign data
        $this ->int = $data;
    }

    public function getter(){       #access data
        return $this->int;
    }
}
$obj = new Test;
$obj->setter(223);
echo $obj->getter();

?>