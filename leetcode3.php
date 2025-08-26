<?php


function Duplicate($array) : bool
{

    //$array_count_values = array_count_values($array);

    // 1 => 2
    // 2 => 1
    // 3 => 1


    for($i = 1; $i <= count($array); $i ++)
    {

        //$array_count_values = array_count_values($array);

        $return = 0;
        
            if($array[$i] == 1)
            {
                $return += 0;
            }
            elseif($array[$i] >= 2)
            {
                $return += 1;
            }
    }

    if($return >= 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}


$arrayD = array_count_values($array = [1, 2, 3]);



echo Duplicate($arrayD);

?>