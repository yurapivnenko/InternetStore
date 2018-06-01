<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Products.php';

class ProductsController
{

    public function actionView($productId)
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Products::getProductById($productId);

        require_once(ROOT . '/views/products/view.html');

        return true;
    }

}