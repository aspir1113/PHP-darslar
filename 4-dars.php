<?php

# kanalim(YOUTUBE,TELEGRAMM) - backend dasturlash
# PHP dasturlash tilida string turlari(funksiyalari)

/* strlen, strrev, str_word_count, str_replace, str_repeat, strtoupper,
strtolower, ucwords */

$strlen="dastur";
echo strlen($strlen)."<br>"; // matn uzunligi

$strrev="I am backend developer!";
echo strrev($strrev)."<br>"; // teskari qiladi

$str_word_count="Ibrohim Abbosov Sodir o`g`li";
echo str_word_count($str_word_count)."<br>"; // so`z sanaydi

$str_replace="Salom dastur";
echo str_replace("dastur", "backend dasturlash", $str_replace)."<br>"; // matnni almashtirish

$str_repeat="PHP - Python &nbsp;&nbsp;";
echo str_repeat($str_repeat, 5)."<br>"; // takrorlab beradi

$strtoupper="ibrohim";
echo strtoupper($strtoupper)."<br>"; // hammasini katta harfda qiladi

$strtolower="IBROHIM";
echo strtolower($strtolower)."<br>"; // hammasini kichik harfda qiladi

$ucwords="salom dasturlash";
echo ucwords($ucwords); // birinchi harfini katta qiladi

?>