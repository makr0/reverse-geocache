<?php
header('Content-type: application/json');
$data = $_POST;

array_walk_recursive( $data, 'make_number' );
file_put_contents('lastpos.json', json_encode($data));


function make_number( &$in, $key ) {
  if(is_array($in)) return;
  $in = floatval($in);
}
?>
