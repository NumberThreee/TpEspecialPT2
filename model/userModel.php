<?php 

class UserModel{

    private $model;

    public function __construct(){
        $this->model = new PDO();

    }

    public function searchUser($user){
        $exist = false;
        /* Se busca el usuario en la base de datos y depende de si existe o no
        se retornará: return $exist.
        if (existe en la base de datos){
            $exist = true;
        else{
            $exist = false;
        }    
        }
        */
        return $exist;
    }
}



?>