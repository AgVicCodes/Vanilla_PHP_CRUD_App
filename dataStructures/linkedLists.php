<?php 

    class Node {
        public $number;
        public $points;
        
        function __construct($num) {
            $this->number = $num;
        }
    }

    $node1 = new Node(10);
    $node2 = new Node(5);

    $node1->Points = $node2;

    function countNode(Node $head) {
        $i = 1;
        $current = $head;
        while (isset($head->points)) {
            $current = $current->points;
            $i++;
        }
        return $i;
    }


























    // var_dump($node1);

    // class LinkedList {

    //     public $nodes;
    //     public $length;
    //     public $next;

    //     function __construct($nodes) {
    //         $this->nodes = $nodes;    
    //     }
        
        
    // }
    
    // function countNode($nodes) {
    //     // $i = $length + 1;
    //     // $node.$i = new Node($value);
    //     echo count($nodes);
    // }
    
    // $list = new LinkedList();
    // countNode($list);

?> 