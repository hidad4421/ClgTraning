<?php
    echo "The Original array is:<br>";
    $a=array("xyz"=>20,"abc"=>50,"hij"=>30,"tuv"=>60);
    echo "<pre>";
    print_r($a);
    echo "After sorting...<br>";
    ksort($a);
    //rsort($a);
    echo "<pre>";
    print_r($a);
?>