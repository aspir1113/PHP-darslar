<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 2-qism.PHP dasturlash tilida massiv funksiyalari

// sort()
$a=[1,5,9,10,7];
sort($a);
print_r($a);

echo "<br>";

// rsort()
$b=array(1,5,9,10,7);
rsort($b);
print_r($b);

echo "<br>\n";

// count()
$c=[1,2,3,4,5];
echo count($c);

echo "<br>\n";

// array_sum()
$sum=array(10,11,12,13,14,15);
echo "Yig`indi: ".array_sum($sum);

echo "<br>\n";

// array_product()
$kopaytma=[1,2,3,4,5];
echo "Ko`paytma: ".array_product($kopaytma);

?>