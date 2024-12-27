<?php

class Solution {

    /**
     * @param string[] $strs
     * @return string
     */
    function longestCommonPrefix($strs) {
        if(empty($strs)){
            return "";
        }

        $prefix = $strs[0];
        
        foreach($strs as $str){
            while(strpos($str, $prefix) !== 0){
                $prefix = substr($prefix, 0, -1);

                if($prefix === ""){
                    return "";
                }
            }
        }

        return $prefix;
    }
}


$solution = new Solution();

$strs = ["flower","flow","flight"]; 

echo $solution->longestCommonPrefix($strs); 

?>