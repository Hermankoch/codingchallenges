<?php
/*
A non-empty array A consisting of N integers is given.
The consecutive elements of array A represent consecutive cars on a road.

Array A contains only 0s and/or 1s:
0 represents a car traveling east,
1 represents a car traveling west.
The goal is to count passing cars.
We say that a pair of cars (P, Q), where 0 ≤ P < Q < N, is passing when P is traveling to the east and Q is traveling to the west.
 */
function solution($A)
{
    $pairs = 0;
    $zeros = 0;
    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] === 0)
        {
            $zeros++;
            continue;
        }
        if ($A[$i] === 1)
        {
            $pairs += $zeros;
        }
    }
    return $pairs;
}
echo solution([0,1,0,1,1]); //should return 5
echo solution([0,1,0,1,1,0]); //should return 5
echo solution([0,1,0,1,1,0,1]); //should return 8