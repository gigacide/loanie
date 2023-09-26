<?php

namespace App\Buyers\Utils;

class DateUtils
{
    public static function formatDate(string $year, string $month, string $day): string
    {
        return date("Y-m-d", strtotime("$year-$month-$day"));
    }
}
