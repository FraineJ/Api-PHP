<?php

require_once 'models/modeloGenerico.php';

class BodegaModel extends ModeloGenerico{
    
    protected $id;
    protected $id_empresa;
    protected $id_user;
    protected $nombre;
    protected $descripcion;
    protected $fecha_creacion;


    public function __construct(){
        parent::__construct("bodega",self::class);
    }

    //getter
    public function getId(){
        return $this->id;
    }
    public function getIdEmpresa(){
        return $this->id_empresa;
    }
    public function getIdUser(){
        return  $this->id_user;
    }
    public function getNombre(){
        return  $this->nombre;
    }
    public function getDescripcion(){
        return  $this->descripcion;
    }
    public function getFechaCreacion(){
        return  $this->fecha_creacion;
    }
    //setter
    public function setId($id){
        $this->id = $id;
    }
    public function setIdEmpresa($empresa){
        $this->id_empresa = $empresa;
    }
    public function setIdUser($id_user){
        $this->id_user = $id_user;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setFechaCreacion($fecha_creacion){
        $this->fecha_creacion = $fecha_creacion;
    }
}
?>