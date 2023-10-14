<?php 

require_once "../view/companyView.php";
require_once "../model/compayModel.php";
class CompanyController{

    private $view;
    private $model;

    public function __construct(){
        $this->view = new CompanyView();
        $this->model = new CompanyModel();

    } 

}



?>