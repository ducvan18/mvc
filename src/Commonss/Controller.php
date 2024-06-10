<?php
class Controller{
    public function renderViewClient($view,$data = []){
        $templatePath = __DIR__ . '/../Views/Client';
        $templatePath = __DIR__ . '/../Views/Compiles';
        $blade = new BladeOne ($template,$compilatedPath);
        echo $blade->run ($view , $data);
    }
    public function renderViewAdmin($view,$data = []){
        $templatePath = __DIR__ . '/../Views/Client';
        $templatePath = __DIR__ . '/../Views/Compiles';
        $blade = new BladeOne ($template,$compilatedPath);
        echo $blade->run ($view , $data);
    }
}
?>