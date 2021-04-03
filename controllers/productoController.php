<?php

require_once 'models/productoModel.php';

class ProductoController{

    public function __construct(){}

    public function listar($id_empresa){
        $productoModel = new ProductoModel();
        return $productoModel->findAllOption(["id_empresa"=>$id_empresa]);
    }

}
?>