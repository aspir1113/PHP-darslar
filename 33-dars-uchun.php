<?php

header('Content-Disposition:attachment;filename=hp.jpg');
echo readfile('php.jpg');

?>