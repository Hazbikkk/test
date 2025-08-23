<?php
class Node {
    public $data;
    public ?Node $next;

    public function __construct($data, ?Node $next = null) {
        $this->data = $data;
        $this->next = $next;
    }
}

// меняешь на цикл
$dataArray = [1, 2, 3, 4, 5, 6, 7, 8];
$head = null;
$lastNode = null;

foreach ($dataArray as $data) {
    $newNode = new Node($data);
    if ($head === null) {
        $head = $newNode;
        $lastNode = $newNode;
    } else {
        $lastNode->next = $newNode;
        $lastNode = $newNode;
    }
}
$litsNodes = $head;

$current = $litsNodes;
while ($current !== null) {
    echo $current->data . " ";
    $current = $current->next;
}