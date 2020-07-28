<?php // exercice5
function getClientByLetter(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT `lastName`, `firstName`
        FROM `clients`
        WHERE `lastName` LIKE \'M%\'
        ORDER BY `lastName`ASC'
 
    );
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}