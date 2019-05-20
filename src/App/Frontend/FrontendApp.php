<?php
namespace App\Frontend;
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
            echo 'Bienvenue sur la page d\'accueil';
        }

        elseif ($this->request->getUri() === '/blog') {
            echo "Bienvenue sur le blog";
        }

        else {
            $this->response->redirect404();
        }
    }
}
