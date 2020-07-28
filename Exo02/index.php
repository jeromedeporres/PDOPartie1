<?php 
include 'models\showtypes.php';
include 'controllers\indexController.php'; 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDO EXO2</title>
</head>
<body>
    <form>
        <select>
            <option value="0" disabled selected>Veuillez choisir un type de spectacle</option>
            <?php
                foreach($showtypesList as $showtypes){
            ?>
            <option value="<?=$showtypes->id?>"> <?=$showtypes->type?></option>
            <?php } ?>
        </select>
    </form>
    <ul><?php  
    foreach($showtypesList as $showtypes){ ?>
        <li><?= $showtypes->type ?></li><?php      
    } ?>
    </ul>
</body>
</html>