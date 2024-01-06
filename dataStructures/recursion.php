<?php 

    // Factorial
    function fact($n) {

        /* n! = n * (n-1)! */

        if ($n >= 2) {
            return $n * fact($n-1);
        } else return 1;
    }

    echo fact(10);