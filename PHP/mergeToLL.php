<?php

class ListNode{
    public $val = 0;
    public $next = NULL;

    public function __construct($val = 0, $next = NULL){
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution{
    function mergeTwoLists($l1, $l2){
        $dummy = new ListNode();
        $curr = $dummy;

        while($l1 && $l2){
            if($l1->val <= $l2->val){
                $curr->next = $l1;
                $l1 = $l1->next;
            }else{
                $curr->next = $l2;
                $l2 = $l2->next;
            }
            $curr = $curr->next;
        }
        $curr->next = $l1 ?: $l2;
        
        return $dummy->next;        
    }

    function createList($arr){
        $dummy = new ListNode();
        $curr = $dummy;
        foreach($arr as $value){
            $curr->next = new ListNode($value);
            $curr = $curr->next;
        }
        return $dummy->next;
    }

    function printList($head){
        $result = [];
        while($head){
            $result [] = $head->val;
            $head = $head->next;
        }
        echo implode(', ', $result);
    }    
}

$solution = new Solution();
$list1 = $solution->createList([1, 2, 4]);
$list2 = $solution->createList([1, 3, 4]);
$mergedList = $solution->mergeTwoLists($list1, $list2);
$solution->printList($mergedList);
?>