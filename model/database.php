<?php
class Datatbase{
    // Heroku connection
    private static $dsn = 'mysql:host=grp6m5lz95d9exiz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=qg6jlaugvzewbacd';
    private static $username = 'ilxxtz4dujznlm3s';
    private static $password = 'oo858qqbh2afdkcz'; 
    private static $db;

    private function __construct(){}

    public static function getDB(){
        if (!isset(self::$db)){
            try {
                // Heroku connection
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                $error = "Database Error: ";
                $error .= $e->getMessage();
                include('../view/error.php');
                exit();
            }
        }
        return self::$db;
    }
    
    
}
?>