<?php 
    
    // Arrays
    $my_array = array("Car", "Bike", "Rollers", "Skates", "Scooter");
    // var_dump($my_array);
    // echo "<br>";
    echo count($my_array);
    echo "<br>";
    $arrLength = count($my_array);

    // Looping through an array
    for( $x = 0; $x < $arrLength; $x++ ) {
        echo $my_array[$x] . "<br>";
    }

    // foreach loop
    foreach( $my_array as $x ) {
        echo $x . "<br>";
    }
    
    // Associative array
    $vehicle_name = array("Car"=>"BMW", "Bike"=>"Kawasaki", "Rollers"=>"FireCrackers", "Skates"=>"SkateBoard", "Scooter"=>"Awabike");
    echo "My favourite car is - " , $vehicle_name["Car"] . "<br>";
    foreach( $vehicle_name as $x => $x_value ) {
        echo "Vehicle " . $x . " is a " . $x_value . "<br>";
    }

    // Multidimensional Arrays
    $report_card = array(
        "Victor" => array(
            "P" => 90,
            "C" => 95,
            "B" => 98
        ),

        "Emmanuel" => array(
            "P" => 34,
            "C" => 32,
            "B" => 67            
        ),

        "David" => array(
            "P" => 84,
            "C" => 94,
            "B" => 47
        ),
    );

    $reports = array(
        array("Victor", 90, 95, 98),
        array("David", 34, 32, 67),
        array("Praise", 84, 94, 47)
    );

    echo "Victor's Physics score is " . $reports[0][0];
    echo "<br>";
    echo "Victor's Chemistry score is " . $reports[0][1];
    echo "<br>";

    // Foreach MA Loop
    foreach ($reports as $data ) {
        echo $data[0] . " ";
        // foreach ($data as $score) {
        //     echo $score;
        //     echo "<br>";
        // }        
    }
    echo "<br>";

    // for MA Loop
    for ($row = 0; $row < count($reports); $row++) {
        echo $reports[$row][0] . " - ";
        for ($col = 1; $col < count($reports[$row]); $col++) {
            echo $reports[$row][$col] . " ";
        }
        echo "<br>";
    }
    
    // Sorting Arrays
    // Ascending order (Alphabetical)
    // Doesn't work when keys are included
    sort($my_array);
    foreach($my_array as $car) {
        echo $car . " ";
    }
    echo "<br>";

    // Also works in Numerical Ascending order
    $num = array(4, 4, 1, 1, 3, 3);
    foreach ($num as $number) {
        echo $number . "<br>";
    }
    echo "<br>";
    sort($num);
    foreach ($num as $number) {
        echo $number . "<br>";
    } echo "<br>";

    // Descending Order - rsort();
    // Sorting key arrays in Ascending
    // According to value - asort();
    // According to Key   - ksort();
    // Descending order
    // According to value - arsort();
    // According to Key   - krsort();


    // SUPERGLOBALS
    $x = 20;
    $y = 15;

    function add_numbers () {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    }

    add_numbers();
    echo $z;
    echo "<br>";
    echo "<br>";

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];




    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    
    // declare(strict_types=1);

    // Variable Declaration
    $x = 10;
    echo $x;
    echo "<br/>";
    echo "This ", "string ", "was ", "concatenated"; 
    echo "<br/>";

    /* Vars are case sensitive
        echo is the output statement for vars
        PHP is loosely typed - vars dont have to be declared with data types.
    */

    // Variable Scope
    
    /* 
        Local
        Global
        Static
    */

    function useNumber () {
        // $x is available here (Global)
        $y = 20;
    }

    // $y is inaccessible from here! (Local)

    // Data types
    
    /* 
        String
        Integer 
        Boolean
        Float/Double
        NULL
        Resource
        Array
        Objects
    */

    // Array

    $cars = array("BMW m5 CS", "Audi r8", "Mercedes GT 500");
    var_dump($cars);
    echo "<br/>";

    // Object

    Class Car {
        public $brand;
        public $model;

        function __construct($brand, $model) {
            $this->brand = $brand;
            $this->model = $model;
        }

        public function brag() {
            return "My car is a ". $this->brand. " ". $this->model. ". Where's yours?";
        }

    }

    $victor = new Car("BMW", "m5");
    echo $victor->brag();


    // Attempt
    /*Class Car {
        public $brand;
        public $model;

        function __construct() {
            $this->brand = $brand;
            $this->model = $model;
        }

        function brag () {
            echo "My car is a ", $this->brand, " ", $this->model, ". Where's yours?";
        }

    }

    $victor = new Car("BMW", "m5");
    echo $victor;
    */

    // String

    // Returning the length of a string
    echo $x = ("<h1>My bunny is over the ocean</h1>");
    echo strlen($x);
    echo "<br>";

    // Counting characters in a string
    echo str_word_count($x);
    echo "<br>";
    
    // Reversing a string
    echo strrev("My bunny is over the ocean");
    echo "<br>";
    
    // Getting the length of a string
    echo strlen($x);
    echo "<br>";

    // Getting the position of a word in a string
    echo strpos($x, "over");
    echo "<br>";


    // Numbers

    $x = PHP_FLOAT_MAX;
    echo $x;
    echo "<br>";

    $x = PHP_FLOAT_MIN;
    echo $x;
    echo "<br>";

    // check if a number is numeric
    $x = "100";
    var_dump(is_numeric($x));
    echo "<br>";
    
    $x = 100.568790;
    var_dump(is_numeric($x));
    echo "<br>";
    
    $x = "number";
    var_dump(is_numeric($x));
    echo "<br>";

    // Casting data types to each other

    // Cast float to int
    $x = "74220.927";
    echo (int)$x;
    echo "<br>";

    // Maths functions

    echo "Minimum is ", min(68432, 73159, 87942);
    echo "<br>";

    echo "Maximum is ", max(68432, 73159, 87942);
    echo "<br>";

    // Absolute number
    echo abs(-327);
    echo "<br>";
    
    // Random number
    echo rand();
    echo "<br>";

    // Within a specific range
    echo rand(1, 100);
    echo "<br>";


    // CONSTANTS
    // Don't include $. Declared using define().
    // define(name, value, case sensitivity)
    // Case insensitive has been deprecated

    define("GREETING", "Hello mfing bitches");
    echo GREETING;
    echo "<br>";

    // Consts can also be declared with the const keyword
    const PERSON = "Man";
    echo PERSON;
    echo "<br>";

    echo "The file location is ", __FILE__;
    echo "<br>";
    
    echo "The file directory is ", __DIR__;
    echo "<br>";
    
    echo "The current line is ", __LINE__;
    echo "<br>";

    // Operators
    // == Equal
    // === Identical
    // <> != not equal
    // !== not identical
    /* <=> Spaceship returns -1, 0 or 1 
    depending on whether two values are 
    equal, less or greater than each other */
    // ++$x Pre-increment, $x++ Post-increment
    // --$x Pre-decrement, $x-- Post-decrement
    // . Concatenation

    // Ternary operator $x? a : b;
    $user = NULL;
    echo $status = empty($user)? "Anonymous" : "Logged In";
    echo "<br>";
    
    $user = "Moshood Ahmed!";
    echo $status = empty($user)? "Anonymous" : "Logged In";
    echo "<br>";

    // Null Coalescing
    $color = "green";
    echo $color = $color ?? "red";
    echo "<br>";

    
    // Conditionals
    echo $t = date("H:m:s D M, Y");
    $timeHour = date("H");
    echo "<br>";

    if ($timeHour <= 11) {
        echo "Good morning!";
    } else {
        echo "Enjoy the rest of your day!";
    }
    echo "<br>";


    // Switch Statement
    $color = "red";

    switch ($color) {

        case "green";
            echo "Your favourite color is green";
            break;
        case "blue";
            echo "Your favourite color is blue";
            break;
        case "black";
            echo "Your favourite color is black";
            break;
        case "peach";
            echo "Your favourite color is peach";
            break;
        default: 
            echo "Your favourite color is neither 
            of the aformentioned, it has to be red";

    }
    echo "<br>";


    // Conditionals
    for ($x=0; $x<5; $x++) {
        echo "$x";
        echo "<br>";
    }
    echo "<br>";

    // Break
    for ($x=0; $x<5; $x++) {
        if ($x == 3) {
            break;
        }
        echo "$x";
        echo "<br>";
    }
    echo "<br>";

    // Continue
    for ($x=0; $x<5; $x++) {
        if ($x == 1) {
            continue;
        }
        echo "$x";
        echo "<br>";
    }
    echo "<br>";


    // Functions
    function writeMSG() {
        echo "Welcome to my page";
    }
    
    writeMSG();
    echo "<br>";
    
    // functions with arguments
    function welcomeMessage($name) {
        echo "Welcome $name";
    }
    
    welcomeMessage("Victor");
    echo "<br>";

    /*  You should declare this to prevent

    */
    // declare(strict_types=1);
    function sumNumbers($a, $b) {
        echo $a + $b;
    }

    sumNumbers(5, 10);
    echo "<br>";

    // Arguments by reference
    /* 
        Try removing the amp to 
        see what value you get.
    */
    function addfive(&$value) {
        $value+= 5;
    }
    
    $num = 3;
    addfive($num);
    echo $num;
    echo "<br>";

?>  

<style>
    body {
        background: #eee;
        color: #3834f7;
        font-family: "outfit";
    }
</style>