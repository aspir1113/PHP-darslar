<?php

// 36-dars. PHP da upload file, FILES superglobali
# YOUTUBE,TELEGRAM - Backend dasturlash

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if($_FILES['file']['size']>50000)
{
	echo "Hajm katta!";
}
else
{
	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	$papka=dirname(__FILE__)."/upload/".$name;
	$result=move_uploaded_file($tmp, $papka);
	if($result==true)
	{
		echo "Fayl yuklandi!";
	}
	if(empty($name))
	{
		echo "Hech narsa yuklanmadi!";
	}
}

?>