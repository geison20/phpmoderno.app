<?php

require_once('Classes/Connection.php');

use PHPModerno\PDO\Classes\Connection;


$connection = ['127.0.0.1', 'local', '3306', 'root', 'admin'];


list($host, $dbname, $port, $user, $pass) = $connection;

$conn = new \PDO("mysql:host=$host; dbname=$dbname; port=$port;", $user , $pass);

$conn->


//$pdo = new Connection($connection);
//
//$conn = $pdo->getConnection();
//
//$query = "SELECT * FROM usuario";
//$statemant = $conn->query($query);
//
//$result = $statemant->fetchAll();
//
//var_dump($result);
