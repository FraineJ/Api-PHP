<?php

require_once 'router/route.php';
require_once 'controllers/bodegaController.php';

Route::get('bodega/listar',function(Request $request){

    $data = dataToken();

    if($data != null){
        $bodegaController = new BodegaController();
        return $bodegaController->listar($data->id_empresa);
    }
    else{
        return "404";
    }

});

Route::get('bodega/selecionar/:id_bodega',function($id_bodega,Request $request){
    
    $data = dataToken();
    if($data != null){
        $bodegaController = new BodegaController();
        return $bodegaController->selecionar($data->id_empresa,$id_bodega);
    }
    else{
        return "404";
    }
});


Route::delete('bodega/eliminar/:id_bodega',function($id_bodega,Request $request){


    
    $data = dataToken();
    
    
    if($data != null){
        $bodegaController = new BodegaController();
        return $bodegaController->eliminar($data->id_empresa,$id_bodega);
    }
    else{
        return '404';
    }
});

Route::post('bodega/crear',function(Request $request){
    
    $data = dataToken();
    if($data != null){
        
        
        $obj = ["descripcion"=>$request->descripcion,"id"=>0,"id_empresa"=>$data->id_empresa,"id_user"=>$data->id,"nombre"=>$request->nombre];

        $bodegaController = new BodegaController();
        return $bodegaController->crear($obj);
    }
    else{
        return "404";
    }
});

Route::post('bodega/actualizar',function(Request $request){
    
    $data = dataToken();
    if($data != null){
        
        $obj = ["descripcion"=>$request->descripcion,"id"=>$data->id,"id_empresa"=>$data->id_empresa,"id_user"=>$data->id,"nombre"=>$request->nombre];

        $bodegaController = new BodegaController();
        return $bodegaController->actualizar($obj);
    }
    else{
        return "404";
    }
});

?>