<?php

$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos');

include "index.view.php";
