<?php // exercice1
function getClientList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT lastName, firstName, DATE_FORMAT(birthDate, \'%d/%m/%Y\') as birthDateFr
        FROM clients'
    );
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}