<?php

class gamesModel{

    private $db;

    function __construct(){
        // 1.- Abro una coneccion 
        $this->db = $this-> conect();
        
    }


    // Abre la coneccion con la base de Datos
    function conect(){
        $db = new PDO ('mysql:host=localhost;' . 'dbname=db_proyectotpe; charset=utf8', 'root', '');
        return $db;
    }

    // Obtener todos los juegos de la DB
    function getAllGames(){
        
        // 2.- Enviamos una consulta y nos devuelve el resultado.-
        // SELECT * FROM juegos
       // $query = $this->db -> prepare ('SELECT * FROM juegos');  // Son dos sub pasos a) Preparar la consulta y
        $query = $this->db -> prepare ('SELECT juegos.*, desarrolladores.* FROM juegos INNER JOIN desarrolladores ON juegos.desarrollador = desarrolladores.id_desarrollador');
        $query-> execute();                                      // b) Ejecutarla


        // 3.- Obtengo la repuesta de la DB
        $games = $query -> fetchAll(PDO::FETCH_OBJ);            // Obtengo un arreglo con TODOS los juegos        

        // 4.- Cerramos la coneccion.-   En PDO  NO HAY QUE CERRAR LA CONEXION

        return $games;  // devuelvo los juegos

    }

    function delGame($id){
        $query = $this->db -> prepare('DELETE FROM juegos WHERE id = ?');
        $query-> execute([$id]);
    }

    function upGame($id, $nombre, $genero, $precio, $año, $material, $descripcion, $imagen, $desarrollador){
        $query = $this->db -> prepare('UPDATE juegos SET nombre =?, genero=?, precio=?, año=?, material=?, descripcion=?, imagen=?, desarrollador=? WHERE id = ?');
        $query-> execute([$nombre, $genero, $precio, $año, $material, $descripcion, $imagen, $desarrollador, $id]);
        // No tendria que controlar que "$desarrollador exista???  -- el formulario puede tener un desplegable!!!!
    }

    function insertGame($nombre, $genero, $precio, $año, $material, $descripcion, $imagen, $desarrollador){ //  Estos datos vienen del formulario
    
        $query = $this->db -> prepare ('INSERT INTO juegos (nombre, genero, precio, año, material, descripcion, imagen, desarrollador) VALUE (?, ?, ?, ?, ?, ?, ?, ?)');  
        $query-> execute([$nombre, $genero, $precio, $año, $material, $descripcion, $imagen, $desarrollador]);
        // No tendria que controlar que "$desarrollador exista???  -- el formulario puede tener un desplegable!!!!

    
        // Obtengo y devuelvo el ID de la tarea nueva    
        return $this->db -> lastInsertId();  // No se para que...
    
    }

    function getGame($id){
        $query = $this->db->prepare('SELECT * FROM juegos WHERE id = ?');
        $query->execute([$id]);
        $game = $query -> fetch(PDO::FETCH_OBJ);
        return $game;
    }

    
    

}