<?php
//MILESTONE 2 - print database in JSON

//include database file
require_once 'database.php';
//change header type from text in json
header('content-Type: application/json');
//print $database after json encoding
echo json_encode($database)
?>