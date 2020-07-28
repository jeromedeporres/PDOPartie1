<?php // exercice7
function getClientList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT lastName, firstName, DATE_FORMAT(birthDate, \'%d/%m/%Y\') as birthDateFr, `clients`.`cardNumber`, `cards` . `cardTypesId`
        FROM clients
        LEFT JOIN `cards`
        ON `cards`.`cardNumber` = `clients`.`cardNumber`
        LEFT JOIN `cardTypes`
        ON `cardTypes`.`id` = `cards` . `cardTypesId`'
    );
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}