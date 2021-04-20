<?php

require_once 'router/route.php';
require_once 'controllers/productoController.php';
require_once 'middleware/tokenMiddleware.php';
require_once 'functions/funDataToken.php';

Route::get('/producto/listar',function(Request $request){
    $data = dataToken(); 
    if($data!=null){
        $productoController = new ProductoController();
        return $productoController->listar($data->id_empresa);
    }
    else{
        return "404";
    }
});

Route::get('/producto/selecionar/:id_producto',function($id,Request $request){

    $data = dataToken();
    if($data!=null){
        $productoController = new ProductoController();
        return $productoController->selecionar($data->id_empresa,$id);
    }
    else{
        return "404";
    }
});


Route::post('producto/crear',function(Request $request){
    
    
    
    
    $data = dataToken();
    if($data != null){

        $objProducto = new stdClass();

        $objProducto->id = $request->id;
        $objProducto->id_empresa = $data->id_empresa;
        $objProducto->nombre = $request->nombre;
        $objProducto->codigo = $request->codigo;
        $objProducto->codigo_barra = $request->codigo_barra;
        $objProducto->descripcion = $request->descripcion;
        $objProducto->foto = $request->foto;
        $objProducto->valor_unitario = $request->valor_unitario;
        $objProducto->iva = $request->iva;



        $productoController = new ProductoController();
        $productoController->crear($objProducto);
    }
    else{
        return "404";
    }
});

Route::post('producto/actualizar',function(Request $request){

    $data = dataToken();
    if($data != null){
        $objProducto = new stdClass();
        $objProducto->id = $request->id;
        $objProducto->id_empresa = $data->id_empresa;
        $objProducto->nombre = $request->nombre;
        $objProducto->codigo = $request->codigo;
        $objProducto->codigo_barra = $request->codigo_barra;
        $objProducto->descripcion = $request->descripcion;
        $objProducto->foto = $request->foto;
        $objProducto->valor_unitario = $request->valor_unitario;
        $objProducto->iva = $request->iva;

        $productoController = new ProductoController();
        return $productoController->actualizar($objProducto->id_empresa,$objProducto->id,$objProducto);
    }
    else{
        return "404";
    }


});





?>