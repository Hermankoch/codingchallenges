<?php
/*
An array A consisting of N different integers is given.
The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.
Your goal is to find that missing element.
*/

function solution($A)
{
    $last = count($A) + 1;
    $first = 1;
    $sum = ($first + $last) / 2 * $last;
    $arrSum = array_sum($A);
    return $sum - $arrSum;
}
echo solution([2,3,1,5,6]);

//Sn = (firstnum - lastnum) / 2 * lastnum   (Sum of range math formula)
//((100-1) + 1) / 2
//number of pairs * (first number + last number)
//n/2 * (n + 1)