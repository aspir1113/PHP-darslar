<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 18-dars. PHP dasturlash tilida foreach takrorlanish operatori.

/* $indekslangan=array('Sodir','Ibrohim','Sardor');

foreach ($indekslangan as $value) {
	echo $value."<br>";
} */

$assotsiativ=['Name'=>'Ibrohim','Surname'=>'Abbosov'];

foreach ($assotsiativ as $key => $value) {
	echo $key." - ".$value."<br>";
}

?>