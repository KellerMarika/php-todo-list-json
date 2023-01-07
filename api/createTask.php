<?php

if(empty($_POST["text"])){
http_response_code(400);
exit("dati non validi");
}

$tasksList = json_decode(file_get_contents("../tasks.json"), true);
/* 
var_dump($tasksList);
var_dump($_POST); */

$newTask = [
  "name" => $_POST["text"],
  "done" => false,
  "id" => uniqid(),
];

$tasksList[] = $newTask;

$jsonString = json_encode($tasksList, JSON_PRETTY_PRINT);
file_put_contents("../tasks.json", $jsonString);
header("Content-Type: application/json");
echo json_encode($newTask); 
  ?>