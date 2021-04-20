<?php

require_once 'models/modeloGenerico.php';

class PermisosModel extends ModeloGenerico{


    protected $id;
    protected $id_rol;
    protected $text;
    protected $icon;
    protected $parent;
    protected $selected;
    
    public function __construct(){
        parent::__construct("permiso",self::class);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setIdRol($id_rol){
        $this->id_rol = $id_rol;
    }

    public function setText($text){
        $this->text = $text;
    }

    public function setIcon($icon){
        $this->icon = $icon;
    }

    public function setParent($parent){
        $this->parent = $parent;
    }

    public function setSelected($selected){
        $this->selected = $selected;
    }


    public function getIdRol(){
        return $this->id_rol;
    }


    public function getId(){
        return $this->id;
    }


    public function getText(){
        return $this->text;
    }

    public function getIcon(){
        return $this->icon;
    }

    
    public function getParent(){
        return $this->icon;
    }


    public function getSelected(){
        return $this->Selected;
    }


}

