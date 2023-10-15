<?php

include_once 'model/gamesModel.php';
include_once 'view/gamesView.php';

class gamesController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new gamesModel();
        $this->view = new gamesView();
        
    }

    function showAll(){
        // obtengo los juegos del Modelo
        $games = $this->model->getAllGames();

        // actualizo la vista
        $this->view->showGames($games);


    }

    function delGame($id){
        $delete = $this->model->delGame($id);  // no se para que guardo la variable $delete 

        // redirecciono al home  -- Aunque tendria que redireccionar al nuevo listado de juegos!!!!
        header("Location:".BASE_URL . "/games");
        
    }

    function updateGame($id){
        // Estos valores vienen de un formulario
        $nombre = $_REQUEST['nombre'];
        $genero = $_REQUEST['genero'];
        $precio = $_REQUEST['precio'];
        $año    = $_REQUEST['año'];
        $material= $_REQUEST['material'];
        $descripcion = $_REQUEST['descripcion'];
        $imagen = $_REQUEST['imagen'];
        $desarrollador = $_REQUEST['desarrollador'];

        $this->model->upGame($id,$nombre, $genero, $precio, $año, $material, $descripcion, $imagen, $desarrollador);
        header("Location:".BASE_URL."/games");
    }

    function addGame(){
        // Estos valores vienen de un formulario
        $nombre = $_REQUEST['nombre'];
        $genero = $_REQUEST['genero'];
        $precio = $_REQUEST['precio'];
        $año    = $_REQUEST['año'];
        $material= $_REQUEST['material'];
        $descripcion = $_REQUEST['descripcion'];
        $imagen = $_REQUEST['imagen'];
        $desarrollador = $_REQUEST['desarrollador'];

        //Verifico campos obligatorios -- TODOS SON OBLIGATORIOS?????

        if(empty($nombre)||empty($genero)||empty($precio)||empty($año)||empty($material)||empty($descripcion)||empty($imagen)||empty($desarrollador)){
            $this->view->showError('faltan datos obligatorios');
            die();
        }
    
        $id = $this->model-> insertGame($nombre, $genero, $precio, $año, $material, $descripcion, $imagen, $desarrollador );
    
        //redirijo al listado de todos los juegos
        header("Location:". BASE_URL . "/games");
    
    }
}
