<?php
/*
Find the smallest positive integer that does not occur in a given sequence.

Given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example:
A = [1, 3, 6, 4, 1, 2], the function should return 5.
A = [1, 2, 3], the function should return 4.
A = [−1, −3], the function should return 1.
*/
function solution($A) {
    $check = [];
    foreach ($A as $val)
    {
        if ($val > 0)
        {
            $check[$val] = 1;
        }
    }

    $i = 1;
    while (true)
    {
        if(!isset($check[$i]))
        {
            return $i;
        }
        $i++;
    }
}