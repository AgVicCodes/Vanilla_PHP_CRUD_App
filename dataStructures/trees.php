<?php 

    class Node {
        public $root;
        public $left;
        public $right;

        function __construct($root) {
            $this->root = $root;
        }
    }
    
    function sumRoots($number) {
        if ($number == null) {
            return 0;
        } else {
            return $number->root + sumRoots($number->right) + sumRoots($number->left);
        }
    }

    $node1 = new Node(2);
    $node2 = new Node(4);
    $node3 = new Node(3);
    $node4 = new Node(6);
    $node5 = new Node(5);
    
    $node1->right = $node2;
    $node1->left = $node3;
    $node3->right = $node4;
    $node3->left = $node5;
    
    echo sumRoots($node1);

    // var_dump(sumRoots($node1));
    


























    // $tree1->right = 4;
    // $tree1->left = 3;
    // $tree2->right = NULL;
    // $tree2->left = NULL;
    // $tree3->right = 6;
    // $tree3->left = 5;
    // $tree4->right = NULL;
    // $tree4->left = NULL;
    // $tree5->right = NULL;
    // $tree5->left = NULL;

    // $tree1 = new Tree(10);
    // $tree2 = new Tree(7);
    // $tree3 = new Tree(8);
    // $tree1.getNum();
    // $tree2.getNum();
    // $tree3.getNum();


    class Tree {
        public int $number;
        public $isPointingTo;
        
        function __construct($num) {
            $this->number = $num;
        }

        public function getNum() {
            echo $this->number . "<br />";
        }
    }


?>