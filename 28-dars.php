<?php

# YOUTUBE,TELEGRAM - Backend dasturlash
/* 28-dars.PHP dasturlash tilida supergloballar bilan tanishuv, $GLOBALS va $_SERVER supergloballari */

$x=5;
$y=7;
function funksiya()
{
	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
funksiya();
echo $z;


echo "<br><br>\n\n";

echo $_SERVER['PHP_SELF']."<br>\n";
echo $_SERVER['SERVER_NAME']."<br>\n";
echo $_SERVER['SCRIPT_NAME']."<br>\n";
echo $_SERVER['SERVER_ADDR'];

?>