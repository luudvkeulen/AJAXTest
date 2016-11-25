<?php
include $_SERVER['DOCUMENT_ROOT'] . '/database/database.php';
$sql = "SELECT * FROM employees";

echo '[';
foreach($db->query($sql) as $row) {
    echo '{';
    echo '"firstname":' . '"' . $row[1]. '"' . ',';
    echo '"lastname":' . '"' . $row[2] . '"' . '}';
    //array_push($result, array('firstname' => $result[1], 'lastname' => $result[2]));
}
echo ']';

$db = null;

