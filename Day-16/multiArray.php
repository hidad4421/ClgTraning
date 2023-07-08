<?php
    $house = array (
        array("Flats",22,18),
        array("Villas",15,13),
        array("Farmhouse",5,2),
        array("Duplex",17,15)
      );

    echo $house[0][0].": In stock: ".$house[0][1].", sold: ".$house[0][2].".<br>";
    echo $house[1][0].": In stock: ".$house[1][1].", sold: ".$house[1][2].".<br>";
    echo $house[2][0].": In stock: ".$house[2][1].", sold: ".$house[2][2].".<br>";
    echo $house[3][0].": In stock: ".$house[3][1].", sold: ".$house[3][2].".<br>";

    //multidimentional array

    $array = array(
      "first" => array("first_first" =>20),
      "second" => array("second_first" =>20,
      "second_second" => array(
        "second_second_first" => "sub sub array")
      )
    );

    echo "<pre>";
    print_r($array);


    //sorting
    $array1=array(20,10,30,40);
    $array2=[50,70,30];

    $sort = sort($array1);
    $asort = asort($array2);
    //rsort($array1);
    //ksort($array2);
    
    print_r($array1);
    print_r($array2);

    //print_r($array1);
    //print_r($array2);
?>