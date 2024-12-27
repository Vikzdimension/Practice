<?php

class Solution {

    // /**
    //  * @param int[] $nums
    //  * @return int[][]
    //  */
    function threeSum($nums) {
        $result = [];
        sort( $nums );
        for ($i = 0; $i < count($nums) - 2; $i++){
            if($i > 0 && $nums[$i] == $nums[$i - 1]){
                continue;
            }

            $left = $i + 1;
            $right = count($nums) -1;

            while($left < $right){
                $sum = $nums[$i] + $nums[$left] + $nums[$right];

                if($sum == 0){
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]];

                    while($left < $right && $nums[$left] == $nums[$left + 1]){
                        $left++;
                    }
                    while($left < $right && $nums[$right] == $nums[$right - 1]){
                        $right--;
                    }

                    $left++;
                    $right--;
                }elseif($sum < 0){
                    $left++;
                }else{
                    $right--;
                }
            }
        }
        return $result;
    }
}


$solution = new Solution();

// Test the function with examples
$nums1 = [-1,0,1,2,-1,-4];
$nums2 = [0,1,1];
$nums3 = [0,0,0];

$nums = [-1, 0, 1, 2, -1, -4];
$result = $solution->threeSum($nums);

print_r($result);


// echo $solution->threeSum($nums1);
// echo $solution->threeSum($nums2); 
// echo $solution->threeSum($nums3); 

?>