<?php
$host = 'localhost';
$db = 'ajaxtest';
$user = 'ajaxuser';
$password = '!@#$1234';
$charset = 'utf8';

$connstring = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $db = new PDO($connstring, $user, $password);
} catch (PDOException $e) {
    print "Error: " . $e->getMessage();
}