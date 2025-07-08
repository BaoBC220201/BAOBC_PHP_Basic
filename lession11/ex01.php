<?php

$month = 4;
$year = 4;

switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo '31 ngày';
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo '30 ngày';
        break;
    case 2:
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    echo "29 ngày";
                } else {
                    echo "28 ngày";
                }
            } else {
                echo "29 ngày";
            }
        } else {
            echo "28 ngày";
        }
        break;
    default:
        echo 'không phù hợp';
}
