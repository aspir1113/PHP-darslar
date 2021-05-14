<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 27-dars.2-qism.PHP dasturlash tilida date() va time()

date_default_timezone_set("Asia/Tashkent");

// H,h,i,s,a,A
echo "Bugun: ".date("Y-m-d H:i:s A")."<br>\n";

echo "Kecha: ".date("l",time()-1*24*60*60)."<br>\n";

$a=strtotime("+2 years");
echo "2 yildan keyin: ".date('Y',$a)." - yil bo`ladi";

?>