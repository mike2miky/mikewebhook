<?php

$json = file_get_contents('php://input');
$data = json_decode($json);

file_put_contents("listen.txt", print_r($data,1));
