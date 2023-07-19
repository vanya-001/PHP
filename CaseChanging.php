<?php
    // Case Changing
    $str = "Vanya maheshwari";
    echo $str."<br/>";
    echo strtolower($str)."<br />";
    echo strtoupper($str)."<br />";
    echo lcfirst($str)."<br/>";
    echo ucfirst($str)."<br/>";
    echo ucwords($str)."<br/>";

    // Replace()
    $name = "Vanya Maheshwari";
    echo $name."<br/>";
    echo str_replace('Vanya', 'Rupam', $name)."<br/>";

    // Reverse function
    $name1 = "vanya";
    echo strrev($name1)."<br/>";

    // substring
    $a = "My name is Vanya Maheshwari";
    echo substr($a,0,10)."<br/>";

    // more functions
    echo strlen($a)."<br/>";
    echo str_word_count($a)."<br/>";
    echo str_repeat("is" , 10)."<br/>";
?>