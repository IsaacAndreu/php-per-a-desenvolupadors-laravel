<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

//$user= 'debian-sys-maint';
//$pass= 'XEMclraXyK0IqZkr';
//$dsn= 'mysql:host=localhost;dbname=phplaraveldevs';



$user= $config['database']['user'];
$pass= $config['database']['password'];
$type= $config['database']['databasetype'];
$host= $config['database']['host'];
$name= $config['database']['databasename'];
$dsn= "$type:host=$host;dbname=$name";



try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (\Exception $e) {
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$greeting = greet();


