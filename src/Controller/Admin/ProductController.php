<?php
class ProductController extends Controller{
    private Product $product;
    private Category $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Caterogy();

    }
    public function index(){
        $product = $this->product->all();
        $this->renderViewAdmin('product.index',[
            'products'=>$product
        ]);
    }
    public function create(){
        $categories = $this->category->all();
     
        $categoryPunk = array_column($categories,'name','id');
        $this->renderViewAdim   ('products.create',[
            'categoryPunk'=>$categoryPunk
        ]);
    }
}
?>