<?php
/*
A binary gap within a positive integer N is any maximal sequence of consecutive zeros that is surrounded by ones
at both ends in the binary representation of N.

For example:
The number 9 has binary representation 1001 and contains a binary gap of length 2.
The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one of length 3.
The number 20 has binary representation 10100 and contains one binary gap of length 1.
The number 15 has binary representation 1111 and has no binary gaps.
 The number 32 has binary representation 100000 and has no binary gaps.
 */

function solution($N)
{
    $binStr = decbin($N);
    $maxGap = 0;
    $curGap = 0;
    $inGap = false;

    for ($i = 0; $i < strlen($binStr); $i++)
    {
        if ($binStr[$i] === '1')
        {
            if($inGap)
            {
                $maxGap = max($maxGap, $curGap);
            }
            $inGap = true;
        } elseif ($inGap)
        {
            $curGap++;
        }
    }
    return $maxGap;
}

echo(solution(1041));
echo '<br>';
echo(solution(32));
echo '<br>';
echo(solution(6));
echo '<br>';
echo(solution(328));

//function solution2($N) {
//    $binStr = decbin($N);
//    $prevCount = 0;
//    $count = 0;
//    $countOne = 0;
//    for ($i = 0; $i < strlen($binStr); $i++) {
//
//        if ($binStr[$i] == '0') {
//            $count++;
//        } else {
//            $count = 0;
//            $countOne++;
//        }
//        if ($prevCount < $count) {
//            $prevCount = $count;
//        }
//    }
//    if ($countOne > 1)
//    {
//        return $prevCount;
//    }
//    return 0;
//}


