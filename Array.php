<?php
    // INDEX ARRAY
    $arr1 = array("Car1", "Car2", "Car3");
    // echo "<pre>";
    // print_r($arr1);
    // echo "</pre>";
    echo $arr1[0];

    // to add element in array
    $arr1[3] = "Car4";
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    // ASSOCIATE ARRAY
    $arr2 = array(
        'name' => 'Vanya',
        'company' => 'IBM',
        'age' => 20,
        'status' => true );

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    $arr2['test'] = "testing"; 
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    // MULTIDIMENSIONAL ARRAY
    $arr3 = array(
        'name' => 'Vanya Maheshwari',
        'address' => array('Peepal' ,'Street', 'Jaiganj', 'Aligarh'),
        'age' => 20
    );
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";
?>