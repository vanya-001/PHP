<?php
    // Date function
    date_default_timezone_set("ASIA/KOLKATA");
    echo "<pre>";
    print_r(getdate());

    $d = getdate();
    echo $d['hours']."<br />";

    // date() => formats a local date and time and returns the formatted date string.
    echo date('d-D')."<br/>";
    // time() => returns the current time in the number of seconds the Unix Epoch.
    echo time()."<br/>";
?>