<?php
// The objective is to convert an array of dates to YYYYDDMM and ignore dates in the array that is already in this format.
function convertDates(array $dates) {
    $convertedDates = [];

    foreach ($dates as $date) {
        // YYYYp MMp DD
        if (preg_match('/^(\d{4})p (\d{2})p (\d{2})$/', $date, $matches)) {
            $convertedDates[] = $matches[1] . $matches[3] . $matches[2];
        }
        //TODO: YYYY-MM-DD
        //TODO: YYYY/MM/DD
    }
    return $convertedDates;
}

// Sample input
$dates = ["2016p 12p 02", "10-11-2023", "10/10/2023", "20230101"];
$convertedDates = convertDates($dates);
print_r($convertedDates);
