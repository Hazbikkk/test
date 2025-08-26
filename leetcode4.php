<?php


function MissingNumber($array)
{

    $list = '';

    for($i = 0; $i < count($array); $i++){
    
        if($array[$i] == null)
            {

            $list .= $array[$i-1] + 1;
            unset($array[$i]);
        
            }
        elseif(count($array) == 1)
            {
            $list .= $array[$i] + 1;
            }
    }

    return $list;
}



$array = [1, 2, 3, 4, null, 6, 7, 8];

echo MissingNumber($array);

?>