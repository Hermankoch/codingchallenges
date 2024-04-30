<?php
/*
A non-empty array A consisting of N integers is given.
A permutation is a sequence containing each element from 1 to N once, and only once.

For example, array A such that:
    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2
is a permutation, but array A such that:
    A[0] = 4
    A[1] = 1
    A[2] = 3
is not a permutation, because value 2 is missing.
The goal is to check whether array A is a permutation.
 */

function solution($A)
{
    $check = [];
    foreach ($A as $v)
    {
        $check[$v-1] = 1;
    }
    for ($i = 0; $i < count($A); $i++) {
        if(!isset($check[$i]))
        {
            return 0; // Not a permutation
        }
    }
    return 1; // True a permutation

}
echo solution([4,1,3,2]);
echo solution([4,1,3]);