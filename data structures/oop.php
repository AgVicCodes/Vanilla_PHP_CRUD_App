<?php 
    class Robot {

        public $name;
        public $color;
        public $weight;

        function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        function greet() {
            echo "Hello, I am $this->name, and I weigh $this->weight KG";
        }
        
        
    }

    $chatgpt = new Robot("Chatgpt", "green", 50);
    $chatgpt.greet();

?>