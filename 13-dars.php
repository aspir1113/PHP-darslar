<!--<table border="1">
	<tr><th>id</th><th>id</th></tr>
	<tr><td>12</td><td>12</td></tr>
</table>-->
<?php

// Amaliyot-while sikli
// Backend dasturlash

/* $yil=1975;
echo "<select>";
while ($yil<=2021) {
	echo "<option>$yil</option>";
	$yil++;
} */

$i=1;
echo "<table border=1 cellpadding=5>";
echo "<tr><th colspan=10 style=color:blue;><h1>Karra Jadvali</h1></th></tr>";

while ($i<=10) {
	$n=1;
	echo "<tr></tr>";
	while ($n<=10) {
		echo "<td style=color:red;>$i*$n=".$i*$n."</td>";
		$n++;
	}
	$i++;
}

?>