<?php 
include 'models\shows.php';
include 'controllers\indexController.php'; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDO EXO6</title>
</head>
    <body>
        <ul><?php
        foreach($showList as $shows){ ?>
            <li><strong>Le Spectacle </strong><?= $shows->title?></li>
            <p><strong>Par </strong><?= $shows->performer ?></p>
            <p><strong>Le </strong><?= $shows->showDateFr?></p>
            <p><strong>à </strong><?= $shows->startTime ?></p>
        <?php      
        } ?>
        </ul>
    </body>
</html>