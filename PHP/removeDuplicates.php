<?php 

class Solution{

    function removeDuplicates(&$nums){

        if(count($nums) == 0){
            return 0;
        }

        $n = count($nums);
        $i = 0;

        for($j = 1; $j < $n; $j++){
            if($nums[$j] != $nums[$i]){
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}

// Example usage:
$solution = new Solution();

// Test Case 1:
$nums1 = [1, 1, 2];
$k1 = $solution->removeDuplicates($nums1);

// Debugging output: Show the entire modified array
// echo "Modified nums1: " . implode(", ", $nums1) . "\n";

// Print the result for Test Case 1
echo "k = " . $k1 . ", nums = [" . implode(", ", array_slice($nums1, 0, $k1)) . "]\n";

// Test Case 2:
$nums2 = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$k2 = $solution->removeDuplicates($nums2);

// Debugging output: Show the entire modified array
// echo "Modified nums2: " . implode(", ", $nums2) . "\n";

// Print the result for Test Case 2
echo "k = " . $k2 . ", nums = [" . implode(", ", array_slice($nums2, 0, $k2)) . "]\n";
?>