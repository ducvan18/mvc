<?php
// namespace
//use ...
Class HomeController extends Controller{
    public function index(){
        $array =[ [
            'name' =>'Lenovo',
            'price' =>5000.95
        ],
        [
        'name' =>'Lenovo 2',
        'price' =>5000.96
        ],
    ];
       
        $data = [
            
                'html' =>"<script>alert('HH')</script>",
                'array' =>$array    
        ];
        $this->renderClient('home',$data);
        //$name = "Duc";
        //$this->renderViewClient('home',['name'=> $name
    //]);
    }
}
?>