<?php 
require_once "../libs/smarty/Smarty.class.php";
class CompanyView{

    public function LoadCompanies($companies){
        $smarty = new Smarty();

        $cont = 0;
        foreach($companies as $compañy){}
        if ($cont % 2 == 0){
            //cargar template 1
            $templateCompany = "../templates/company.contain1.tpl";
        }
        else{
            //cargar template 2
            $templateCompany = "../templates/company.contain2.tpl";
        }

        $smarty->assign('company', $companies);
        $smarty->display($templateCompany);  
        $cont++;


    }

    
}





?>

