<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";
class Database
{

    private static $connection = null;

    public static function getInstance()
    {
        //Kiểm tra nếu connection là null, thì khởi tạo connection là một đối tượng PDO
        if (!isset(self::$connection)) {
            try {
                self::$connection = new PDO("mysql:host=localhost;dbname=restaurant", "root", "");
                // set the PDO error mode to exception
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
            } catch (PDOException $e) {
                // echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$connection;
    }
}
