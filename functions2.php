<?php
    // Implode function 
    // Takes an array and converts it to a string
    $arr = [
        '1','2','3','4','5'
    ];
    echo "<pre>";
    print_r($arr);

    // implode(glue,pieces)
    $str = implode('-' , $arr);
    echo $str."<br/>";


    // Explode function
    // Takes a string and converts it into array
    $str1 = "My name is Vanya Maheshwari";
    echo "$str1 <br/>";
    $a = explode(" " ,$str1);
    print_r($a);
?>