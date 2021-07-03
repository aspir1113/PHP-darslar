<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 37-dars. PHP dasturlash tilida $_COOKIE superglobali

$cookie_name="user";
$cookie_value="Ibrohim";

setcookie($cookie_name,$cookie_value,time()-3600);
setcookie('lastname','Abbosov',time()-3600);

if(isset($_COOKIE['lastname']))
{
	echo $_COOKIE['lastname']." is set";
}
else
{
	echo "Error!";
}

?>