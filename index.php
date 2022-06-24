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
    <header>
        <div class="header_box">
            <img src="img/spotify-logo.png" alt="logo">
        </div>
        </header>
        <main>
            <div class="main_container">
                <ul>
                    <!-- print disks in HTML -->
                    <?php foreach($database as $key => $album) : ?>
                        <li class="album">
                            <img <?= "src=$album[poster]" ?> />
                            <h4><?= $album['title']?></h4>
                            <h5><?= $album['author']?></h5>
                            <h5><?= $album['genre']?></h5>
                            <h5><?= $album['year']?></h5>
                        </li>
                        <?php endforeach; ?>
                        <!-- /print disks in HTML -->
                </ul>
            </div>
        </main>
    </body>

</html>