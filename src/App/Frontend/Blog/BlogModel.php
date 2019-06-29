<?php
namespace App\Frontend\Blog;

use Framework\Model;

class BlogModel extends Model {

    const Comment_Default = 0;
    const Comment_Signaled = 1;

    /**
     * Récupère tous les articles de la table
     *
     * @return array
     */
    public function getListsPosts()
    {
        $posts = $this->db->query(
            "SELECT * FROM posts ORDER BY id DESC"
        );

        $listPosts = $posts->fetchAll();

        return $listPosts;
    }

    /**
     * Récupère un seul article
     *
     * @param $postId
     * @return mixed
     */
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
    /**
     * Récupère la liste des commentaires pour un seul billet
     *
     * @param $postId
     * @return bool|\PDOStatement
     */
    public function getComments($postId)
    {
        $comments = $this->db->prepare(
            "SELECT comments.id, comments.author, comments.content, comments.created_at, comments.signaled
             FROM comments
             WHERE comments.post_id = ?"
        );
        $comments->execute(array($postId));
        return $comments;
    }

    /**
     * Permet d'insérer d'un commentaire
     *
     * @param $postId
     * @param $author
     * @param $content
     */
    public function insertComment($postId, $author, $content)
    {
        try {
            $statement = "INSERT INTO comments (comments.post_id, comments.author, comments.content, 
                          comments.created_at, comments.signaled) 
                          VALUES ('$postId', '$author', '$content', NOW(), " . self::Comment_Default . ")";
            $req = $this->db->prepare($statement);
            $req->execute();
        } catch (\PDOException $e) {
            echo 'La requete de la fonction insertComment ne marche pas :<br/>' . $e->getMessage();
        }
    }

    /**
     * Permet de signaler un commentaire
     *
     * @param $id
     * @return bool
     */
    public function signalizeComment($id)
    {
        try {
            $statement = "UPDATE comments SET comments.signaled = '" . self::Comment_Signaled . "'," .
                " comments.signaled_at = NOW()" .
                " WHERE comments.id = '$id'";
            $req = $this->db->prepare($statement);
            $req->execute();
            return true;
        }
        catch (\PDOException $e) {
            echo "Requête impossible. Le commentaire n'a pas été signalé : <br/>" . $e->getMessage();
        }
    }
}
