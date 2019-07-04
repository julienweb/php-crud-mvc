<?php
namespace App\Frontend\Blog;

use Framework\Controller;
use Framework\Http\Request;

class BlogController extends Controller {

    public function __construct($callable)
    {
        parent::__construct($callable);
        $this->model = new BlogModel();
        $this->module = 'Blog';
    }

    public function index()
    {
        $listPosts = $this->model->getListsPosts();

        return $this->view->render($this->module, 'index.php', [
            'listPosts' => $listPosts
        ]);
    }
    
    public function show(Request $req)
    {
        $post = $this->model->getPostById($req->dataGET('id'));
        $comments = $this->model->getComments($req->dataGET('id'));

        return $this->view->render($this->module, 'show.php', [
            'post' => $post,
            'comments' => $comments,
            'message' => $_SESSION['success']
        ]);
    }

    public function addComment()
    {
        if (!empty($_POST)) {

            extract($_POST);

            if (!array_key_exists('author', $_POST) || $_POST['author'] == '' ) {
                $_SESSION['error']['author'] = "Commentaire impossible à envoyer : Vous n'avez pas renseigné votre nom";
                return false;
            }
            if (!array_key_exists('content', $_POST) || $_POST['content'] == '' ) {
                $_SESSION['error']['content'] = "Votre commentaire est vide";
                return false;
            }

            $post =  array_keys($_POST);
            $postId =  preg_replace('#[a-z]+#', '', $post[2]);
           // $postId =  preg_replace('~\D~', '', $post);
            
            $postId = htmlspecialchars($postId);
            $author = htmlspecialchars($_POST['author']);
            $content = htmlspecialchars($_POST['content']);


            $this->model->insertComment($postId, $author, $content);

            $_SESSION['Message'] = 'Votre commentaire a bien été ajouté';

            return $this->view->render($this->module, 'comment/add.php', [
                'postId' => $postId
            ]);
        }
    }

    public function signalizeComment(Request $req)
    {
        $signaled = $this->model->signalizeComment($req->dataGET('id'));

        $post =  key($_POST);
        $postId =  preg_replace('#[a-z]+#', '', $post);

        if ($signaled === true) {
           return $this->view->render($this->module, 'comment/signalize.php', [
               'postId' => $postId
           ]);
        }
        return false;
    }
}
