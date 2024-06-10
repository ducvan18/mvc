<?php
$router->mount('/admin',function( ) use ($router){
    $router->get('/').DashboardController::class . '@dashboar';
    //CRUD USER
    $router ->mount('/products',function () use ($router){
        $router->get('/' ,          ProductController::class . '@index'); //danh sach
        $router->get('/create' ,          ProductController::class . '@create'); //Show from moi
        $router->get('/store' ,          ProductController::class . '@store'); //luu moi vao DB 
        $router->get('/{id}/show' ,          ProductController::class . '@show'); //Xem chi tiet
        $router->get('/{id}edit' ,          ProductController::class . '@edit'); //Show from sua
        $router->get('/{id}update' ,          ProductController::class . '@update'); //Luu sua  vao DB 
        $router->get('/{id}delete' ,          ProductController::class . '@delete'); //Xoa  
    });
});
?>