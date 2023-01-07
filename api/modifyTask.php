<?php
/*  var_dump($_POST);  */
var_dump($_POST["done"]);
$tasksList = json_decode(file_get_contents("../tasks.json"), true);

/* $taskIndex;
 */
foreach ($tasksList as $index => $task) {
  if ($task["id"] === $_POST["id"]) {
    $taskIndex = $index;
  }
}
var_dump($taskIndex);


$tasksList[$taskIndex]["done"] = $_POST["done"];


$jsonString = json_encode($tasksList, JSON_PRETTY_PRINT);
file_put_contents("../tasks.json", $jsonString);

?>