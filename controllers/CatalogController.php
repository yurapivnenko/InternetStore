<?php

class CatalogController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/catalog/index.html');

        return true;
        /*$newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;*/
    }
}