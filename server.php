<?php

// file_get_contents reads the content of a file 
// var_dump(file_get_contents('data.json'));

$dataJson = file_get_contents('/data.json'); 

$data = json_decode($dataJson, true);
var_dump($data);

// file_put_contents writes content to a file (1st parameter is the path, 2nd is the content)

$tryData = [
    'name' => 'Pippo',
    'surname' => 'Pluto',
    'age' => 5,
    'alive' => true
];
// json_decode returns an associative array or an object depending on the type of data in the file content
file_put_contents('prova.json', json_encode($tryData));


// var_dump($shipJson);



