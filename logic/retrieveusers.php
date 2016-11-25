<?php
include $_SERVER['DOCUMENT_ROOT'] . '/database/database.php';
$sql = "SELECT * FROM employees";

echo '[';
$count = 0;
$resultset = $db->query($sql);
$rows = $resultset->fetchAll();
$rowcount = count($rows);
foreach($rows as $row) {
    $count++;
    echo '{';
    echo '"firstname":' . '"' . $row[1]. '"' . ',';
    echo '"lastname":' . '"' . $row[2] . '"' . '}';
    if($count < $rowcount) {
        echo ',';
    }
}
echo ']';

$db = null;

