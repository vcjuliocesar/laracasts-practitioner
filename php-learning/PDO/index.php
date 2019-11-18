<?php
include "functions.php";
include "Task.php";

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);
//dd($tasks[0]->completed);


include "index.view.php";
