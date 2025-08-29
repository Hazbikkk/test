<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $result = [];
        $comparsion = [];

        for($i = 0;$i < count($nums); $i++)
        {
            if($nums[$i] === $target)
            {
                $comparsion[] = $i;
            }
        }
        if(array_search($target, $nums) === false)
        {
            $result[] = -1;
            $result[] = -1; 
        }
        if(!empty($comparsion))
        {
            sort($comparsion);
            $first = $comparsion[0];
            $last = end($comparsion);

            $result[] = $first;
            $result[] = $last;
        }

        return $result;
    }
}