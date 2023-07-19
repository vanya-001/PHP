<?php
    // echo "Hello Vanya"; //printing line
    // Declaring variable
    $first = 5; 
    $First = 10;
    // Case sensitive and variables can vary
    echo $first;
    echo $First;
    $_name = "Vanya";
    echo $_name."\n";

    // Concatenation
    $Fname =  "My name is";
    $Lname = " Vanya Meshwari";
    echo $Fname.$Lname." Hello!"."\n";
    echo "\n";
    // Operator
    // Artimatic :- -+%/* ++ --
    // Comparison :- == != > < >= <=
    // Logical/Conditional :- ! && || TernaryOperator
    $x = 5;
    $x > 7 ? $flag = "Yes" : $flag = "No";
    var_dump($flag);
    // Assignment :- = -= += *= /= %=

    // Conditional Statements
    // if, if-else, if-elseif, Nested if-else
    $age = 10;
    if($age >= 18){
        echo "\n Yes you can VOTE!";
    }elseif($age == 17){
        echo "\n Please wait one more year!";
    }
    else{
        echo "\n No you can't vote";
    }

?>