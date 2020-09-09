<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        //归并排序里的归并步骤
        $new_l = new ListNode(0,null);
        $res = $new_l;
        for( ;$l1 != null || $l2 != null; ){
            if( $l1 == null ){
                $new_l->next = $l2;
                break;
            }
            if( $l2 == null ){
                $new_l->next = $l1;
                break;
            }
            if( $l1->val < $l2->val ){
                //取l1的值，l1后移一位
                $l = new ListNode($l1->val,null);
                $l1 = $l1->next;
            }else{
                $l = new ListNode($l2->val,null);
                $l2 = $l2->next;
            }
            //放到链表里
            $new_l->next = $l;
            $new_l = $new_l->next;
        }

        return $res->next;

    }
}


$Solution = new Solution();
var_dump($Solution->mergeTwoLists([1,2,4], [1,3,4]));


