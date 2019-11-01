<?php

/**
 * How many life at that time?
 *
 * Tip: when time is coming, it split then die
 *
 * @param     $durationHours
 * @param int $startNumber
 * @param int $lifeHours
 * @param int $fissionTime
 *
 * @return float
 */
function howManyAtThatTime($durationHours, $startNumber = 1, $lifeHours = 3, $fissionTime = 1): float
{
    $total = $startNumber;

    $needDieNumber             = [];
    $count                     = 1;
    $needDieNumber[$lifeHours] = $startNumber;
    while ($durationHours--) {
        $new = 0;
        if ($count % $fissionTime === 0) {
            $new = $total;
        }
        $dieNumber                          = isset($needDieNumber[$count]) ? $needDieNumber[$count] : 0;
        $total                              = $total + $new - $dieNumber;
        $needDieNumber[$count + $lifeHours] = $new;
        echo ( $count ) . "hours\t total:" . $total . "\n";
        $count++;
    }

    return $total;
}

echo howManyAtThatTime(7);


