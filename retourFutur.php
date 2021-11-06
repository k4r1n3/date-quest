<?php

$presentTime = new DateTime('Now');
$destinationTime = new DateTime("2015-10-21 04:06:40");

echo $destinationTime->format("M d, Y, g:i a")  . '<br>';
echo $presentTime->format("M d, Y, g:i a") . '<br>';

$interval = $presentTime->diff($destinationTime);
echo $interval->format("%Y years %M months %D days %H hours %I minutes") . '<br>';
var_dump($presentTime->diff($destinationTime));

?>