<?php // exercice6
function getShowList(){
    try { 
    // $db devient une instance de l'objet PDO
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', ''); 
    } catch(Exception $error) {
        die($error->getMessage());
    }
    $allShowsQuery = $db->query(
        'SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') as showDateFr, `startTime`  
        FROM `shows`
        ORDER BY `title` ASC'
    );
    $data = $allShowsQuery->fetchAll(PDO::FETCH_OBJ); //data est un tableau d'objets
    return $data;
}