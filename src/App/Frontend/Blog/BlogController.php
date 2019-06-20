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
    
    public function show(Request $request)
    {
        $post = $this->model->getPostById($request->dataGET('id'));
        return $this->view->render($this->module, 'show.php', [
            'post' => $post
        ]);
    }
}
