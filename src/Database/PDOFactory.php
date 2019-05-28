<?php
namespace Database;

class PDOFactory {

    public static function getMysqlConnexion()
    {
        try {
            $db = new \PDO("mysql:host=localhost;dbname=p4_blog_oc", 'root', 'root');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(\PDOException $e) {
            echo 'Erreur !: '.$e->getMessage().'<br/>';
            die();
        }
    }
}
