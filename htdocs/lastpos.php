<?php
header('Content-type: application/json');
$fp = fopen('lastpos.json','r');
fpassthru($fp);
fclose($fp);
?>
