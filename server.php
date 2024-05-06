<?php

$dataJson = file_get_contents('data.json'); 


// $data = json_decode($dataJson, true);
// var_dump($data);


if(isset($_POST['text'])) {
    var_dump($_POST);
}
//var_dump($_POST);
// file_get_contents reads the content of a file 
// $writeData = file_get_contents('data.json');

header('Content-Type: application/json');
echo $dataJson;
// file_put_contents writes content to a file (1st parameter is the path, 2nd is the content)

// json_decode returns an associative array or an object depending on the type of data in the file content

// var_dump($shipJson);



