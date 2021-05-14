<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 26-dars.1-qism.PHP dasturlash tilida date() va time()

date_default_timezone_set("Asia/Tashkent");

// Y,y,F,M,m,d,D,l
echo "Bugun: ".date("Y/F/l")."<br>\n";

echo time()."<br>\n";

echo date("l",time());

?>