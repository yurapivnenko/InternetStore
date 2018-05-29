<?php

include_once(ROOT.'/models/News.php');

class ProductsController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/products/index.html');

        return true;
        /*$newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;*/
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);

            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';
        }

        return true;
    }
}