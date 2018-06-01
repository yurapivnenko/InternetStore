<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Products.php';

class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT . '/views/catalog/index.html');

        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Products::getProductsListByCategory($categoryId);

        require_once(ROOT . '/views/catalog/category.html');

        return true;
    }

}
