<?php

// 31-dars. preg_match() va preg_replace() funksiyalari
# YouTube,Telegram - Backend dasturlash

$matn="Abbosov Ibrohim";
echo preg_match("/ibrohim/i", $matn);

echo "<br>\n";

$dastur="PHP dasturi";
echo $dastur."<br>\n";
echo preg_replace("/php dasturi/i", "Mening dasturim", $dastur)."<br>\n";
echo $dastur."<br>\n";

?>