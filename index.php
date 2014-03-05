<?php


//$input = file_get_contents('php://input');

$input  = isset($_REQUEST) ? $_REQUEST : null;

print_r(json_encode($_REQUEST));
