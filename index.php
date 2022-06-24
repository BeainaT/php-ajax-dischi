<?php
//MILESTONE 1: print disks in DOM using only PHP code
//include database file
require_once './server/database.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- print disks in HTML -->
        <?php foreach($database as $key => $album) : ?>
            <img <?= "src=$album[poster]" ?> />
            <h3><?= $album['title']?></h3>
            <h4><?= $album['author']?></h4>
            <h4><?= $album['genre']?></h4>
            <h4><?= $album['year']?></h4>
        <?php endforeach; ?>
        <!-- /print disks in HTML -->
    </body>

</html>