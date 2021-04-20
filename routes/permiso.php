<?php
// no volver a requerir
require_once 'router/route.php';
require_once 'controllers/permisosController.php';



Route::get('/permiso/listar/:id_rol',function($id_rol,Request $request){
    
    $permisosController = new PermisosController();
    return   $permisosController->listar($id_rol);
});



