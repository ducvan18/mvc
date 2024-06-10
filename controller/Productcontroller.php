<?php

function productlist(){
    $data = productALL();
    require_once ' /views/product/list.php';
}
?>