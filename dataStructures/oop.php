<?php 
    class Robot {

        public $name;
        public $color;
        public $weight;
        public $pointingTo;

        function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        
        function greeting() {
            echo "Hello, I am $this->name, my theme is color $this->color and I have " . $this->weight . "TB memory space <br />";
        }
        
    }
    
    
    $chatgpt = new Robot("Chatgpt", "green", 50);
    $chatgpt->greeting();
    $google = new Robot("Google", "blue", 90);
    $google->greeting();
    $siri = new Robot("Siri", "black", 20);
    $siri->greeting();
    $chatgpt->pointingTo = $siri;
    $siri->pointingTo = $google;
    $google->pointingTo = $chatgpt;

?>