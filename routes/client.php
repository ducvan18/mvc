<?php
// Define routes
$router->get ('/', HomeController::class .'@index');
$router->get ('/about',function(){
    echo "Trang Giới Thiệu";
});
$router->get('/movies/{movieId}/photos(/\d+)?',function($movieId,$photoId = null){
    echo 'Movie # '.$movieId .', photo #'.$photoId;
});
?>