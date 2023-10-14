<?php

class CompanyModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=prueba_db_tp2;charset=utf8', 'root', '');
    }

    public function mostrar(){
        $sent = $this->db->prepare('SELECT * FROM company');
        $sent->execute();
        $model = $sent->fetchAll(PDO::FETCH_OBJ);
        return $model;
    }


}


?>