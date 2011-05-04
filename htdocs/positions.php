<?php
header('Content-type: application/json');
$fp = fopen('positions.json','r');
fpassthru($fp);
fclose($fp);
?>
