<?php

class SiteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.html');

        return true;
    }
}