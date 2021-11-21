<?php
require('leo.php');

$in = "auto";
$leo = new Leo("ende");
print $leo->getTranslations($in);	
?>