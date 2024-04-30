<?php
// The objective is to return a status given a temperature input in the format DD.D where D is a digit.
function solution($T)
{
    // Implement your solution here
    try {
        $temp = (float)$T;
    } catch (exception $e)
    {
        return 'Temperature should be in DD.D format eg 35.0';
    }

    switch ($temp) {
        case $temp < 35.0:
            return 'hypothermia';
            break;
        case $temp >= 35.0 && $temp <= 37.5:
            return 'normal';
            break;
        case $temp > 37.5 && $temp <= 40.0:
            return 'fever';
            break;
        case $temp > 40.0:
            return 'hyperpyrexia';
            break;
        default:
            return 'Temperature not in range of values';
    }
}

echo solution('37.5');