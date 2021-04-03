<?php

require_once 'router/route.php';
require_once 'controllers/productoController.php';
require_once 'middleware/tokenMiddleware.php';

Route::get('/producto/listar',function(Request $request){
    $id = 1;

    $token = TokenMiddleware::getTokenRequest();
    if($token != null){
        if(TokenMiddleware::confirmarToken($token)){
            $data = TokenMiddleware::getObjectToken($token);
            $productoController = new ProductoController();
            return $productoController->listar($data->id_empresa);
        }
        else{
            return ("4004");
        }
    }
    else{
        return ("404");
    }
    
    
    
});



?>