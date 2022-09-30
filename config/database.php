<?php
namespace app\config;
class Database{
    private static $_connection = false;
    private static $host = "training-db";
    private static $db_name = "todo";
    private static $username = "roo";
    private static $password = "11";

    public static function getConnection(){

        try{
            self::$_connection = new \mysqli(self::$host, self::$username, self::$password, self::$db_name);
        }catch(MySqlException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return self::$_connection;
    }
}
