<?php

function recursia($i)
{
    if($i > 0)
    {
        echo $i-- . PHP_EOL;
        recursia($i);
    }
    else{
        return;
    }
}

$a = 9;
recursia($a);

function out()
{
    function inner()
    {
        return 'Hello World';
    }
    return 'Povezlo povezlo';
}

echo out() . PHP_EOL;
echo inner() . PHP_EOL;


function first()
{
    return 'First function';
}

function second()
{
    return 'Second function';
}

$a = rand(0, 1) ? first() : second();

echo $a;


class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$first = new Point(1, 2);

$second = new Point(10, 22);

$free = new Point(8, 9);

$array = [$first, $second, $free];

usort($array, function($a, $b)
{
    $dist_a = sqrt($a -> x ** 2 + $a -> y ** 2);
    $dist_b = sqrt($b -> x ** 2 + $b -> y ** 2);

    return $dist_a <=> $dist_b;
});

print_r($array);

?>