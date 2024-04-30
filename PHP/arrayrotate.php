<?php
// The objective is to rotate an array by a certain number of rotations.

function solution($A, $K)
{
    if (!count($A) > 0)
    {
        return $A;
    }
    for ($i = 0; $i < $K; $i++)
    {
        $removed = array_pop($A);
        array_unshift($A, $removed);
    }
    return $A;
}

solution([3, 8, 9, 7, 6], 3);