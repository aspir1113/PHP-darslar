<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
# 34-dars. PHP da fopen(),fread(),fclose(),fgets()

/* $read=fopen("word.doc", "r") or die("Topilmadi!");
echo fread($read, filesize('word.doc'));
fclose($read); */

$read=fopen("word.doc", "r") or die("Topilmadi!");
echo fgets($read, filesize('word.doc'));
fclose($read);

?>