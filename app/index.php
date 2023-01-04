<?php

use Framework\App;
use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';

require 'app/Models/Task.php';

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selectAll('tasks');

$greeting = greet();
