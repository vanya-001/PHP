<?php

    // USER DEFINED FUNCTIONS
    function greet(){
        echo "Welcome to our Channel!";
        return;
    }

    greet();

    // PRE-DEFINED FUNCTION
    // ARRAY FUNCTIONS 
    $cars = array(
        0 => 'Car-1',
        1 => 'Car-2',
        2 => 'Car-3', 
        3 => 'Car-4'
    );
    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    var_dump(is_array($cars));

    echo array_search('Car-2', $cars);

    echo "<pre>";
    $newCars = array_slice($cars, 1);
    print_r($newCars);
  
    echo "<pre>";
    $chunkedArray = array_chunk($cars, 2);
    print_r($chunkedArray);

    echo "<pre>";
    $popArray = array_pop($cars);
    print_r($popArray);

    array_push($cars, "Car-5", "Car-6");
    echo "<pre>";
    print_r($cars);

    echo "<pre>";
    print_r(array_keys($cars));
    var_dump(array_key_exists('4', $cars));

    echo count($cars);
    print_r(array_count_values($cars));

    $cars1 = array(
         'Car-1',
         'Car-2',
         'Car-3', 
         'Car-4'
    );
    $cars2 = array(
         'Car-5',
         'Car-6',
         'Car-7', 
         'Car-8'
    );

    $z = array_merge($cars1 , $cars2);
    echo "<pre>";
    print_r($z);

?>