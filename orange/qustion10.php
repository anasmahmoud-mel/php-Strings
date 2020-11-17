<?php
$str = 'If the facts do not fit the theory, change the facts.';
 

echo preg_replace("/the/", "THAT", $str, 1);
?>