<?php
include 'Worker.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8', 'skillup', 'skillup');

$sql = 'SELECT * FROM workers WHERE salary = :salary';

/** @var PDOStatement $result */
$result = $pdo->prepare($sql);
$result->execute(['salary' => 500]);

while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}
