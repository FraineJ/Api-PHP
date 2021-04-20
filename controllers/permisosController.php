<?php

require_once 'models/permisosModel.php';

class PermisosController{

    
    
    public function __construct(){}

    public function listar($id_rol){
        $permisosModel = new PermisosModel();
        $permisos = json_decode($permisosModel->Sp("usp_Permisos",["id_rol"=>$id_rol]));

        $res = ["status"=>200,"permiso"=>$permisos];
        return json_encode($res);
 
    }

   

}

