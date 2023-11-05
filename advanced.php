<?php

    // Php dates
    /*
        d - Day of the month 01 to 31.
        m - month of the year 01 - 12
        y - year. 4 numbers. (Capital letter indicates full year)
        l - Day of the week. Mon to Fri.
    */
    // echo date("l") . " " . date("d") . "-" . date("m") . "-" . date("y");
    echo date("l d-m-y");
    echo "<br />";

    // Times
    /* 
        H - 00 - 23 Hours
        h - 0 - 12 hours
        i - minutes
        s - seconds
        a - am or pm
    */

    // Creating date
    $date = mktime(13, 30, 59, 11, 06, 2023);
    echo $date;

    // Require vs Include
    /* 
    
        Require stops scripts from 
        running if not found. 

        Include continues running 
        even when file isn't found.
    
    */

    // File open or file create
    // fopen("filename", "action");
    // Actions: 
    /* 
        r : read;
    */

    // File close
    // fclose();
?>

<footer>
    Copyright &copy 2020-<?= date("Y") ?>. All rights reserved!
</footer>