<?php

require_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {

        $newsList = array();
        $newsList = News::getNewsList();

        require_once (ROOT.'/views/news/index.php');


        return true;
    }

    /*1 variant
    public function actionView($params){
        echo "One New $params[0], $params[1]";
        return true;
    }*/


    public function actionView($id)
    {
        if ($id){
            $newsItem = News::getNewsItemById($id);
            print_r($newsItem);
        }
        echo "<br>One New id: $id";
        return true;
    }

}