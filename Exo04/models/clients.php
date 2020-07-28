<?php // exercice4
function getClientList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT `lastName`, `firstName`
        FROM `clients`
        INNER JOIN `cards`
        ON `cards`.`cardNumber` = `clients`.`cardNumber`
        INNER JOIN `cardTypes`
        ON `cardTypes`.`id` = `cards` . `cardTypesId`
        WHERE `cardTypes`.`type` = \'Fidélité\';'
    );
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}

