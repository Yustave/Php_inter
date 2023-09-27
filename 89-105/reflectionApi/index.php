<?php

require_once "Member.php";
$member = new app\Member();
function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre><br><hr><br>";
}

// **************** Reflection Parameter ****************************
// $rp = new ReflectionParameter(['app\Member','getdetailinfo'],0);
// showData($rp);
// echo $rp->isoptional();

// **************** Reflection object ****************************
// $ro = new ReflectionObject($member);
// showData(get_class_methods($ro));

?>