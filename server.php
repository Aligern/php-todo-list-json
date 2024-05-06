<?php

var_dump(file_get_contents('data.json'));
// file_get_contents reads the content of a file
// file_put_contents writes content to a file


// json_decode returns an associative array or an object depending on the type of data in the file content

$shipJson =  file_get_contents("js/data.json");
// var_dump($shipJson);



header("Content-Type: application/json");
echo $shipJson;