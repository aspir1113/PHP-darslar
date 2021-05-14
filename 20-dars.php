<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 20-dars. 1-qism. PHP dasturlash tilida massiv funksiyalari 

# in_array
$a=array('salom','qalesan');

if(in_array('salom', $a))
{
	echo "Ha <br>\n";
}
else
{
	echo "Yo`q";
}

$b="Mening ismim Ibrohim";

if(is_array($b))
{
	echo "Massiv <br>\n";
}
else
{
	echo "Massiv emas <br>\n";
}

$massiv=['salomlashish'=>'salom','qalesan','nima',5,7,12];
echo array_search('salom', $massiv);

echo "<br>\n";
echo $massiv[array_rand($massiv)];

?>