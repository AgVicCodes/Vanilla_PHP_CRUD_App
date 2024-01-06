<?php 

    class Node {
        public $number;
        public $isPointingTo;
    }

    function __construct($num) {
        $this->number = $num;
    }

    function getNum() {
        echo $this->number;
    }

    $node1 = new Node(10);
    $node1.getNum();

?>