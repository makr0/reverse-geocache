<?php

header('Content-type: application/json');

$data = $_POST;

array_walk_recursive($data, 'make_number');

file_put_contents('positions.json', json_encode($data['positions']));

function make_number(&$in, $key) {
    if (is_array($in) || !is_numeric($in))
        return;
    $in = floatval($in);
}

?>
