<?php

class Solution {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[] 
     */
    function twoSum($nums, $target) {
        $n = count($nums);
        $result = array(0,0);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i +1 ; $j < $n; $j++) {
                if($nums[$i] + $nums[$j] == $target){
                    $result[0] = $i;
                    $result[1] = $j;
                    return $result;
                }
            }
        }
        return $result; 
    }
}

// Example usage:
$solution = new Solution();
$nums = [2, 7, 11, 15];
$target = 26;
$result = $solution->twoSum($nums, $target);

echo "Indices: " . implode(", ", $result);  // Output: Indices: 0, 1


?>