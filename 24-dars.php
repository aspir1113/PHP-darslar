<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 24-dars. PHP dasturlash tilida serialize(), unserialize()

$users=['Ibrohim','Sarvar','Botir','Akbar'];

print_r($users);

$value=serialize($users);

echo "<br>\n".$value."<br>\n";

print_r(unserialize($value));

?>