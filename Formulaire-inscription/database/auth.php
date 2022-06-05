<?php

$dns = 'mysql:host=localhost;dbname=form_test';
$usr = getenv('DB_USER');
$pwd = getenv('DB_PWD');

try {
    $pdo = new PDO($dns, $usr, $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $exception) {
    echo 'erreur : '.$exception->getMessage();
}