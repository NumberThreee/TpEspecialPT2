<?php

include_once ('libs/smarty/Smarty.class.php');

class gamesView{

    function showGames($games){

        $smarty = new Smarty();

        $smarty->assign('games', $games);

        $smarty->display('templates/games.tpl');

    }

    function showError($msg){   //  Falta smarty !!!!
        echo"<h1> ERROR! </h1>";
        echo"<h2>  $msg  </h2>";
    }


}