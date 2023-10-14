<?php 

class GamesModel{

private $pdo;

public function __construct(){
    $this->pdo = new PDO('mysql:host=localhost;dbname=prueba_db_tp2;charset=utf8', 'root', '');
}
public function filterByGenre($genre){


}
public function filterByCompañy($company){

}
public function insertGame($array){

}
public function deleteGame($name){

}

}


?>