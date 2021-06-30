<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
# 35-dars. PHP da fgetc() va fwrite() funksiyalari

$b=fopen("word.doc", "w") or die("Xatolik");
echo fwrite($b, "Botir")."<br>\n";
fclose($b);

$a=fopen("word.doc", "r") or die("Xatolik");
echo fgetc($a);
fclose($a);

?>