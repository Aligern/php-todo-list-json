<?php
$shipJson =  file_get_contents("js/data.json");
// var_dump($shipJson);

header("Content-Type: application/json");
echo $shipJson;