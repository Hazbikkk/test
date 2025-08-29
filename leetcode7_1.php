<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $count = -1;
        $startIndex = -1;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] === $target && $startIndex === -1) {
                $startIndex = $i;
            }

            if ($startIndex > -1) {
                if ($nums[$i] === $target) {
                $count = $i;
                }
            }
        }

        return [$startIndex, $count];
    }
}