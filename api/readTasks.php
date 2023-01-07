
<?php

$tasksList = file_get_contents("../tasks.json");
header("Content-Type: application/json");

echo $tasksList;

?>