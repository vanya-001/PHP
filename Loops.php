<?php
    // while loop
    $i = 0;
    while($i < 10){
        echo "Hello! Welcome to my Channel"."<br/>";
        $i++;
        break;
    }

    // for loop
    for ($i=0; $i<10 ; $i++) { 
        echo $i."<br />";
        continue;
    }

    // do-while loop
    $j=0;
    do {
        echo "do-while loop executing ".$j." times"."<br/>";
        $j++;
    } while ($j <= 10);

    // foreach loop
    $arr1 = [
        "HTML" => 5000,
        "CSS" => 2500,
        "JS" => 6000,
        "PHP" => 5000,
    ];
    // echo "<pre>";
    // print_r($arr1);
    foreach ($arr1 as $course => $fees) {
        echo "The fees of $course is $fees<br />";
    }

?>