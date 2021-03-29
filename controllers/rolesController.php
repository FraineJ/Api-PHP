<?php

require_once 'models/rolesModel.php';

class RolesController{

    
    
    public function __construct(){}

    public function findAll(){
        $rolesModel = new RolesModel();
        return $rolesModel->findAll();
    }

    public function listar($id_empresa){
        
        $rolModel = new RolesModel();
        $roles = $rolModel->findAllOption(["id_empresa"=>$id_empresa]);
        return $roles;
    }

    public function findOne($id){
        $rolesModel = new RolesModel();
        return $rolesModel->findOne($id);
    }


    public function update($obj = null){
        $rolesModel = new RolesModel();
        return $rolesModel->update($obj);
    } 

    public function create($obj = null){
        $rolesModel = new RolesModel();
        return $rolesModel->create($obj);
    }

    public function delete($id){
        $rolesModel = new RolesModel();
        return $rolesModel->delete($id);
    }

}

