<?php



$host = '127.0.0.1';
$db   = 'exemple';
$user = 'root';
$pass = 'root';


$dsn = "mysql:host=$host;dbname=$db";
try {
     $bdd = new \PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


