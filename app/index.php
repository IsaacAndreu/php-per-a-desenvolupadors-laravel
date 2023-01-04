<?php

use Framework\App;


require 'config.php';

require 'app/Models/Task.php';


$tasks = App::get('database')->selectAll('tasks');
//$database = new Database(App::get('config')['database']);
//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks');

$greeting = greet();
