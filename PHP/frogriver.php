<?php
/*
A small frog wants to get to the other side of a river.
The frog is initially located on one bank of the river (position 0) and wants to get to the opposite bank (position X+1).
Leaves fall from a tree onto the surface of the river.

You are given an array A consisting of N integers representing the falling leaves. A[K] represents the position
where one leaf falls at time K, measured in seconds.

The goal is to find the earliest time when the frog can jump to the other side of the river.
The frog can cross only when leaves appear at every position across the river from 1 to X
(that is, we want to find the earliest moment when all the positions from 1 to X are covered by leaves).
The leaves do not change their positions once they fall in the river.

For example, you are given integer X = 5 and array A such that:
  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4
In second 6, a leaf falls into position 5. This is the earliest time when leaves appear in every position across the river.
If the frog is never able to jump to the other side of the river, the function should return −1.
 */
function solution($X, $A)
{
    $countArr = array_fill(1, $X,0);
    $totalFilled = 0;

    for ($i = 0; $i < count($A); $i++)
    {
        if ($A[$i] <= $X && $countArr[$A[$i]] === 0)
        {
            $countArr[$A[$i]]++;
            $totalFilled++;
            if ($totalFilled === $X)
            {
                return $i;
            }
        }
    }
    return -1;
}
echo solution(5, [1,3,1,4,2,3,5,4]); //should return 6
echo '<br>';
echo solution(7, [1,6,6,7,5,4,3,3,3,3,3,3,3,2]); //should return 13