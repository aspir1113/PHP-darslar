<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 3-qism. PHP dasturlash tilida massiv funksiyalari
// array_unique(), array_pop(), array_push(), array_shift(), array_unshif()

$a=['matematika','english','matematika','english','uzbek','russian'];
print_r(array_unique($a));

echo "<br>";

$b=array(1,2,3,4,5);
array_pop($b);
print_r($b);

echo "<br>";

$c=[1,2,3,4,5];
array_push($c,0);
print_r($c);

echo "<br>";

$d=array(1,2,3,4,5);
array_shift($d);
print_r($d);

echo "<br>";

$e=[1,2,3,4,5];
array_unshift($e,0);
print_r($e);

?>