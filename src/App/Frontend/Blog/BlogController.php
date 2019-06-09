<?php
namespace App\Frontend\Blog;

use Framework\Controller;

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
}
