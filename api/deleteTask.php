<?php
if (empty($_POST["taskIdToDelete"])) {
  http_response_code(400);
  exit("impossibile recuperare task-id");
}
$tasksList = json_decode(file_get_contents("../tasks.json"), true);

/* var_dump($_POST); */

$taskIndex;

foreach($tasksList as $index => $task){
  if ($task["id"]=== $_POST["taskIdToDelete"]){
    $taskIndex = $index;
  }
}
var_dump($taskIndex);

array_splice($tasksList, $taskIndex, 1);


$jsonString = json_encode($tasksList, JSON_PRETTY_PRINT);
file_put_contents("../tasks.json", $jsonString);

?>