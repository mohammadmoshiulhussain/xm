<?php

require_once('vendor/autoload.php');
use App\classes\Home;
use App\classes\Product;
use App\classes\Upload;

if(isset($_GET['pages'])){

    if($_GET['pages'] == 'product'){
        $product = new Product();
        $products = $product->getProduct();
        include 'pages/product.php';
    }

    elseif($_GET['pages'] == 'product-details'){
        $products = new Product();
        $result = $products->getProductsById($_GET['id']);
        include 'pages/product-details.php';
    }



        elseif ($_GET['pages']=='file-upload')
        {
            include "pages/file-upload.php";
        }


}
elseif (isset($_POST['product_btn']))
{
    $product =new Upload($_POST, $_FILES);
    $product->newProduct();

}
