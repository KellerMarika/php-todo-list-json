
<?php

/* $tasksList = json_decode(file_get_contents("../tasks.json"), true);
header("Content-Type: application/json");
var_dump($_POST);

$tasksList[] = [
  "name" => $_POST["text"], */
/*   "done" =>$_POST["done"], */
/*   "id" => uniqid(),
];
$jsonString = json_encode($tasksList, JSON_PRETTY_PRINT);
file_put_contents("../tasks.json", $jsonString);
header("Content-Type : application/json");
echo json_encode($tasksList[count($tasksList) - 1]); */
/* 
if(empty($_POST["text"])){
  http_response_code(400);
  exit("dati non validi");
}

 */

$tasksList = json_decode(file_get_contents("../tasks.json"), true);

var_dump($tasksList);
var_dump($_POST);


?>