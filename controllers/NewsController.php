<?php

include_once(ROOT.'/models/News.php');

class NewsController
{
<<<<<<< HEAD
=======
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;
    }

>>>>>>> ba462ecf45785a5e64a132f21f4df3907f0c3c4f
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

    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';
    }
}