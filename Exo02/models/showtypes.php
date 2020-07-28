<?php // exercice2
function getShowtypesList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allShowtypesQuery = $db->query(
        'SELECT `type`, `id`
        FROM showtypes'
    );
    $data = $allShowtypesQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}