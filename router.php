<<<<<<< HEAD
<?php 


include_once '/controller/game.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if(!empty($_GET['action'])){    
    $action = $_GET['action'];
} else {
    $action = 'inicio';
}

$params = explode('/', $action);

switch($params[0]){
    case 'inicio':
        //muestra home
            
        break;
    case 'quienes somos':
        //descripcion de la pagina  + desarrolladores (Rod - juli - Mauricio)
              
        break;
    case 'busquedas':
        // diferentes tipos de busqueda (los que pide el enunciado)
            
        break;
    case 'agregarJuego':
        // Agrega un juego a la db - solo administrador logeado
        
        break;
    case 'borrarJuego':
        // Borra un juego de la db - solo administrador logeado
        break;
        
    case 'modificaJuego':
        // Modifica un juego en la db - solo administrador logeado
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

?>


