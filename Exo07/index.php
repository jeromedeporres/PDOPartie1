<?php 
include 'models\clients.php';
include 'controllers\indexController.php'; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDO EXO7</title>
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
        <?php
        foreach($clientList as $clients){ ?>
            <ul>
            <li><strong>Nom : </strong><?= $clients->lastName?></li>
            <li><strong>Prénom : </strong><?= $clients->firstName ?></li>
            <li><strong>Date de naissance : </strong><?= $clients->birthDateFr?></li>
            <li><strong>Carte de fidélité : </strong><?= $clients->cardTypesId == 1 ? 'OUI' : 'NON' ?></li>
            <li><strong>Numéro de carte : </strong><?= $clients->cardNumber ?></li>
            </ul>
        <?php      
        } ?>
        
    </body>
</html>