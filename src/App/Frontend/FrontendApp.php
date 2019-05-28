<?php
namespace App\Frontend;
use App\Frontend\Blog\BlogController;
use App\Frontend\Home\HomeController;
use Framework\App;

class FrontendApp extends App {

    public function __construct()
    {
        parent::__construct();
        $this->name = 'Frontend';
    }

    public function run ()
    {
        $this->response->redirectTrailingSlash($this->request->getUri());

        if ($this->request->getUri() === '/') {
            $home = new HomeController();
            $home->index();
        }

        elseif ($this->request->getUri() === '/chapitres') {
            
            $blog = new BlogController();
            $blog->index();
        }

        else {
            $this->response->redirect404();
        }
    }
}
