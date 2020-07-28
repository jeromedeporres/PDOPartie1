<?php 
include 'models\clients.php';
include 'controllers\indexController.php'; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDO EXO5</title>
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <h1>Nom des clients commence par la lettre "M"</h1>
    <ul><?php  
    foreach($clientList as $client){ ?>
        <li class="firstName"><strong>Nom : </strong><?= $client->lastName ?></li>      
        <li class="lastName"><strong>Prénom : </strong><?= $client->firstName ?></li><?php      
    } ?>
    </ul>
</body>
</html>