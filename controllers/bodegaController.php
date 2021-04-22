<?php

require_once 'models/bodegaModel.php';

class BodegaController{



    public function __construct(){}

    public function listar($id_empresa){
        $bodegaModel = new BodegaModel();
        return $bodegaModel->findAllOption(["id_empresa"=>$id_empresa]);
    }

    public function selecionar($id_empresa,$id_producto){
        $bodegaModel = new BodegaModel();
        return $bodegaModel->findAllOption(["id_empresa"=>$id_empresa,"id"=>$id_producto],["AND"]);
    }

    public function eliminar($id_empresa,$id_bodega){
        $bodegaModel = new BodegaModel();
        return $bodegaModel->deleteOption(["id_empresa"=>$id_empresa,"id"=>$id_bodega],["AND"]);
    }

    public function crear($obj){
        $bodegaModel = new BodegaModel();
        return $bodegaModel->create($obj);
    }

    public function actualizar($obj){
        $bodegaModel = new BodegaModel();
        return $bodegaModel->update($obj);
    }
}
?>