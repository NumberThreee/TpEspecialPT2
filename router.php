<?php

include_once 'controller/gamesController.php';
//include_once 'templates/index.html';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if(!empty($_GET['action'])){    
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch($params[0]){
    case 'home':
        // ElHome seria otro!!
        $controller = new gamesController();
        $controller->showAll();
            
        break;
    case 'games':
        // muestra un listado con todos los juegos

        $controller = new gamesController();
        $controller->showAll();
              
        break;
    case 'filtrar':
        // diferentes tipos de busqueda (los que pide el enunciado)
        echo "aca iria a listar los juegos de acuerdo a una compañia";

            
        break;
    case 'agregarJuego':
        // Agrega un juego a la db - solo administrador logeado
        $controller = new gamesController();
        $controller->addGame();
        
        break;
    case 'borrarJuego':
        // Borra un juego de la db - solo administrador logeado
        $controller = new gamesController();
        $controller->delGame($params[1]);
        
        break;
        
    case 'modificaJuego':
        // Modifica un juego en la db - solo administrador logeado
        $controller = new gamesController();
        $controller->updateGame($params[1]);
        break;

    case 'verMas':
        // Muestra info de cada juego
        $controller = new gamesController();
        $controller->seeMoreGame($params[1]);
        break;

    case 'agregadesarrolladora':
        // Agrega una desarrolladora a la db - solo administrador logeado
        break;

    case 'borradesarrolladora':
        // Borra una desarrolladora de la db - solo administrador logeado
        break;

    case 'modificadesarrolladora':
        // Modifica una desarrolladora de la db - solo administrador logeado
        break;

    case 'login':
        // acceso de administrador
        break;

    case 'logout':
        // deslogueo administrador
        break;
           
    default:
        echo " ERROR 404 - Pagina no encontrada"; // este error tiene que salir de la vista
        break;
}