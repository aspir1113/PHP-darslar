<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 23-dars. PHP dasturlash tilida explode,implode,trim

$string="Backend dasturlash PHP";
echo $string."<br>\n";
print_r(explode(" ", $string));


echo "<br><br>\n\n";


$massiv=array('Google','Facebook','YOUTUBE','Amazon','Microsoft');
print_r($massiv);

echo "<br>\n";

echo implode(', ', $massiv);

echo "<br><br>\n\n";

$trim="Salom Hammaga!";
echo trim($trim,"Salom")."<br>";

echo trim("Do`st","Do`");

?>