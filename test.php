<?php
    function vote($age){
        if($age >= 18 && $age <= 65){
            return "Yes You can vote";
        }
        else{
            return "No you can't vote";
        }
    }

    echo "Age 24: ". vote(24)."<br />";
    echo "Age 16: ". vote(24)."<br />";
?>