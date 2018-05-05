<?php
/**
 * Created by IntelliJ IDEA.
 * User: Админ
 * Date: 05.05.2018
 * Time: 9:21
 */

class Db
{

    public static function getConnection(){
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include ($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['db_name']}";

        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }

}