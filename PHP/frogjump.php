<?php
// The objective is to find a solution of O(1) to minimize calculations for
// A Frog that jumps a certain number of spaced $D. The Frog starts at $X and wants to jump to the position $Y
function solution($X, $Y, $D)
{
    $jumps = ceil(($Y-$X)/$D);
    return $jumps;
}
echo solution(10,85,30);
echo solution(1,5,2);
echo solution(3,999111321,7);

/*
0(n) Solution
    while ($X < $Y)
    {
        $X += $D;
        $count++;
   }
*/