<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        

        $map = [];

        if(empty($nums))
        {
            return 0;
        }
        else
        {
    
        $lastIndex = end($nums);
            for($i = 0;$i < count($nums); $i++)
                {
                $map[] = $nums[$i]; // 0 => 1;
                                    // 1 => 3;
                if($nums[$i] == $target)
                { return $i; } elseif($nums == $map && $target < $nums[0])
                { return 0; } elseif($nums == $map && $target > $lastIndex)
                { return $i + 1; } elseif(count($map) > 1)
                { if($target > $map[$i-1] && $target < $map[$i])
                    { return $i; } }
                }
        }
    }
}
?>