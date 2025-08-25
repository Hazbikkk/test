<?php


function Duplicate($array) : bool
{
    if(count($array) == 0)
    {
        return false;
    }

    
    $result = 0;

    for($i = 0; $i < count($array); $i ++)
    {
            if($array[$i] === $array[$i + 1])
            {
                $result += 1;
            }
    }
    if($result >= 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}


$array = [1, 2, 7, 3, 4, 5];

echo Duplicate($array);

?>