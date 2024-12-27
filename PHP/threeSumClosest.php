<?php

class Solution {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    function threeSumClosest($nums, $target) {
        $n = count($nums);
        sort($nums);
        // var_dump($nums);
        $closesum = PHP_INT_MAX;
        // echo $closesum;

        for ($i = 0; $i < $n - 2; $i++){
            $left = $i + 1;
            $right = $n - 1;

            while ($left < $right) {
                $currentsum = $nums[$i] + $nums[$left] + $nums[$right];

                if(abs($currentsum - $target) < abs($closesum - $target)){
                    $closesum = $currentsum;
                }

                if($currentsum < $target){
                    $left++;
                }elseif($currentsum > $target){
                    $right--;
                }else{
                    return $currentsum;
                }
            }
        }
        return $closesum;
    }
}

$solution = new Solution();
$nums = [-1, 2, 1, -4];
$target = 1;
$result = $solution->threeSumClosest($nums, $target);

echo "The closest sum is: " . $result;
?>