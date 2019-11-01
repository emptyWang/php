<?php

/**
 * How many life at that time?
 */

//init number
$startNumber = $total = 1;
//one lift time
$lifeHours = 3;
//duration time
$durationHours = 6;
//fission interval time
$fissionTime = 1;

$needDieNumber             = [];
$count                     = 1;
$needDieNumber[$lifeHours] = $startNumber;
while ($durationHours --) {
    $new                                = $total;
    $dieNumber                          = isset($needDieNumber[$count]) ? $needDieNumber[$count] : 0;
    $total                              = $total + $new - $dieNumber;
    $needDieNumber[$count + $lifeHours] = $new;
    echo ( $count ) . "hours\t total:" . $total . "\n";
    $count++;
}


