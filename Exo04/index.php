<?php 
include 'models\clients.php';
include 'controllers\indexController.php'; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDO EXO1</title>
</head>
<body>
    <ul><?php  
    foreach($clientList as $client){ ?>
        <li>Prénom : <?= $client->firstName ?> Nom : <?= $client->lastName ?></li><?php      
    } ?>
    </ul>
</body>
</html>