<?php
//MILESTONE 2 - print database in JSON

//include database file
require_once 'database.php';

//change header type from text in json
header('content-Type: application/json');

//
if(empty($_GET['genre']) || $_GET['genre'] == "all") {
    //print $database after json encoding
    echo json_encode($database);
} else {
    $filtered = [];
    //for each album in database
    foreach($database as $album) {
        //if (genre in album == select value) new $filtered array will setted as 'old' album array
        !($album['genre'] == $_GET['genre']) ?: $filtered[] = $album; //this writted condition returns false so condition must be negated
    }
    //print filtered array
    echo json_encode($filtered);
}

?>