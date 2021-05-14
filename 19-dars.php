<?php

// YOUTUBE,TELEGRAM - Backend dasturlash
// 19-dars. PHP dasturlash tilida ko`p o`lchamli massivlar

$a=array('age'=>16,'name'=>
[
	'Ibrohim'=>array(
		'surname'=>[
			'surname'=>'Abbosov','Akbarov'=>'nimadir'
		]
	),'Palonchi','sarvar'
]
);

print_r($a);
echo "<br>\n".$a['name']['Ibrohim']['surname']['surname'];

?>