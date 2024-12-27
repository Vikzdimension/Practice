<?php

class Solution{

    /**
     * Summary of isValid
     * @param string $s
     * @return mixed
     */
    public function isValid($s){
        $stack = [];

        for($i = 0; $i < strlen($s); $i++){
            $char = $s[$i];

            if($char == '(' || $char == '{' || $char == '['){
                array_push($stack, $char);
            }
            else{
                if(empty($stack)){
                    return false;
                }

                $top = array_pop($stack);

                if(($char == ')' && $top != '(')
                    || ($char == '}' && $top != '{')
                    || ($char == ']' && $top != '['))
                {
                    return false;
                }
            }
        }
        return empty( $stack ); 
    }
}

$solution = new Solution();
$s = "(({{[}]}))";
echo "The  string is ".($solution->isValid($s) ? "valid" : "invalid");

?>