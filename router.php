<?php 


include_once '/controller/game.controller.php';

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
        //muestra home
            
        break;
    case 'company':
        //Rodrigo
              
        break;
    case 'games':
        // Mauricio
            
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


