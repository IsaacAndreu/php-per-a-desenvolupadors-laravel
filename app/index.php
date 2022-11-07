<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

require 'framework/Database.php';




$database = new Database($config);
$database->selectAll('tasks');

$tasks = Database::selectAll('tasks');

$greeting = greet();


