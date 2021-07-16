<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// Cookie bo`yicha amaliyot

$number = (isset($_COOKIE['number'])) ? $_COOKIE['number'] : 0;
$number++;

setcookie('number', $number, time()+5);
echo "$number marta bo`ldi!";

?>