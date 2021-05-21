<?php

// 30-dars. PHP da form davomi
// YouTube,Telegram - Backend dasturlash

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	echo "<h1>Profile Page</h1>";
	echo "Your name is: ".strip_tags($name)."<br>\n";	
	echo "Your email is: $email <br>\n";
	echo "Your password is: $password <br>\n";
}

?>