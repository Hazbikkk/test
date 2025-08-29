<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        for($i = 0;$i < count($nums); $i++)
            {
                if($target === $nums[$i])
                {
                    return $i;
                }
            }
        $nums[] = $target;

        sort($nums);
        return array_search($target, $nums);
    }
}

?>