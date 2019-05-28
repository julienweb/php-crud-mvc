<?php
namespace App\Frontend\Blog;

use Database\PDOFactory;

class BlogModel {

    protected $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnexion();
    }

    public function getListsPosts()
    {
        $posts = $this->db->query(
            "SELECT * FROM posts ORDER BY id DESC"
        );
        $listPosts = $posts->fetchAll();
        return $listPosts;
    }
}
