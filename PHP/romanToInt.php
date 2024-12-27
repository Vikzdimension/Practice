<?php


class Solution {


    function romanToInt($s) 
    {
        $s = strtoupper($s);        
        $m  = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        // var_dump($m); 
        $ans = 0;

        $length = strlen($s);

        for($i = 0; $i < $length; $i++){

            #check if current value is less than next value
            #substract it

            if($i < $length -1 && $m[$s[$i]] < $m[$s[$i+1]]){
                $ans -= $m[$s[$i]]; 
            }else{
                $ans += $m[$s[$i]];
            }
        }
        return $ans;        
    }
}

$solution = new Solution();

$roman = "xiI";

echo $solution->romanToInt($roman);

?>