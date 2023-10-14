<?php 

require_once '../model/gamesModel.php';
require_once '../view/gamesView.php';

class GamesController{
    private $company;
    private $genre;
    private $view;
    private $model;
    
    

    public function __construct(){
        $this->view = new GamesView();
        $this->model = new GamesModel();
    }

    public function filterByGenre($genre){
        $this->model->filterByGenre($genre); 
    }

    public function filterByCompany($company){
        $this->model->filterByCompañy($company);
    }

    public function showAll(){
        $this->view->showAll();
    }

    public function showByGenre(){
        $this->view->showByGenre();
    }

    public function showByCompany(){
        $this->view->showByCompany();
    }
}










?>