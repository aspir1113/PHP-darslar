<?php

/* PHP dasturlash tilida operator va uning turlari
Arithmetic(Arifmetik) Assignment(Belgilash) Increment/Decrement(Qo'shish/Ayirish) */

# Arifmetik -> + * - /
$a=15;
$b=15;
echo $a*$b;

echo "<br>";

# Belgilash
$m=12;
echo $m."<br>";
$m/=8; // $m=$m+8;
echo $m."<br>";

$n=17;
echo $n%5;

echo "<br>";

$k=5;
echo $k**3; // 5*5*5=125

echo "<br>";

# Increment/Decrement

/* pre-increment, pre-decrement,
post-increment, post-decrement */

$a=7;
$a++;
echo $a;

?>