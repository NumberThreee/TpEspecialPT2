<?php 

require_once "../view/companyView.php";
require_once "../model/companyModel.php";
class CompanyController{

    private $view;
    private $model;

    public function __construct(){
        $this->view = new CompanyView();
        $this->model = new CompanyModel();

    } 
    public function searchDB(){
        $this->model->mostrar();
    }
    public function showCompanies($companies){
        $this->view->LoadCompanies($companies);
    }
}



?>