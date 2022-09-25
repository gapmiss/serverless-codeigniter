<?php
header('Content-type: application/json; charset=utf-8');
$db = \Config\Database::connect();
$query = $db->query('SELECT * FROM demo WHERE 1');
$results = $query->getResultArray();
$json = json_encode($results);
echo $json;
?>