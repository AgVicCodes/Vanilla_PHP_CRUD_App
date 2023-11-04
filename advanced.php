<?php

    // Php dates
    /*
    d - Day of the month 01 to 31.
    m - month of the year 01 - 12
    y - year. 4 numbers. (Capital letter indicates full year)
    l - Day of the week. Mon to Fri.
    */
    echo date("l") . " " . date("d") . "-" . date("m") . "-" . date("y");

?>

<footer>
    Copyright &copy 2020-<?= date("Y") ?>. All rights reserved!
</footer>