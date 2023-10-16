<?php

include_once ('libs/smarty/Smarty.class.php');

class gamesView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        
    }

    function showGames($games){       
        $this->smarty->assign('games', $games);
        $this->smarty->display('templates/games.tpl');

    }

    function showDetailsGame($game){
        $this->smarty->assign('game', $game);
        $this->smarty->display('templates/gamedetails.tpl');
    }

    function showform(){
        $this->smarty->display('templates/formalta.tpl');
    }

    function showError($msg){   //  Falta smarty !!!!
        echo"<h1> ERROR! </h1>";
        echo"<h2>  $msg  </h2>";
    }


}