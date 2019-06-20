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

    public function getPostById($postId)
    {
        $post = $this->db->prepare(
            "SELECT posts.id, posts.content, posts.author, posts.created_at
            FROM posts
            WHERE posts.id = ?"
        );

        $post->execute(array($postId));

        if ($post->rowCount() == 1) {
            return $post->fetch();
        }
        else {
            throw new \RuntimeException("Aucun billet ne correspond à l'identifiant '$postId'");
        }
    }
}
