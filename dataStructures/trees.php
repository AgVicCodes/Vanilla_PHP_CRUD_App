<?php 

    class Tree {
        public $number;
        public $isPointingTo;
    }

    function __construct($num) {
        $this->number = $num;
    }

    function getNum() {
        echo $this->number . "<br />";
    }

    $node1 = new Node(10);
    $node2 = new Node(7);
    $node3 = new Node(8);
    $node1.getNum();
    $node2.getNum();
    $node3.getNum();

?>