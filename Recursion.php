<?php
    // Recursion
    // function greet(){
    //     echo "Hello!";
    //     greet();
    // }

    function countNumber($start){
        echo "$start<br/>";
        $start++;
        if($start == 10){
            return;
        }
        countNumber($start);
    }

    countNumber(1);
?>