<?php

require_once "Member.php";
// ***************** Reflection Class *************

$member = new app\Member();

// $rc = new reflectionClass("app\Member");
// showData(get_class_methods($rc));


// ***************** Reflection Method *************

// $rm = new ReflectionMethod("app\Member","getdetailinfo");
// showData(get_class_methods($rm));
// // $rm->invoke($member);
// $rm->invoke($member,["Kekki","Yustave","Hello World"]);

// ***************** Reflection Property *************

$rp = new reflectionProperty('app\Member','detailinfo');
showData(get_class_methods($rp));
// $rp->selfAccessible(true);
showData($rp->getValue($member));


function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre><br><hr><br>";
}

?>