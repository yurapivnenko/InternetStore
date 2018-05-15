<?php

class News
{
    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = DB::getConnection();

            $result = $db->query('SELECT * FROM news WHERE id='.$id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function getNewsList()
    {
        $db = DB::getConnection();

        $newsList = array();

        $result = $db->query('SELECT * '
                . 'FROM news '
                . 'ORDER BY date DESC '
                . 'LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['content'] = $row['content'];
            $i++;
        }

        return $newsList;
    }
}