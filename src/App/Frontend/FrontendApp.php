<?php
namespace App\Frontend;

use Framework\App;
use Framework\Route;
use Framework\Router;

class FrontendApp extends App {

    public function __construct()
    {
        parent::__construct();
        $this->name = 'Frontend';
    }

    public function run ()
    {
        $this->router->addRoute(new Route('/', 'Home', 'index'));
        $this->router->addRoute(new Route('/chapitres', 'Blog', 'index'));
        $this->router->addRoute(new Route('/chapitres/chapitre-:id', 'Blog', 'show', 'id'));
        $this->router->addRoute(new Route('/chapitres/ajouter-commentaire', 'Blog', 'addComment'));
        $this->router->addRoute(new Route('/chapitres/signaler-commentaire-:id', 'Blog', 'signalizeComment', 'id'));
        
        $this->response->redirectTrailingSlash($this->request->getUri());
        
        $controller = $this->getController();
        $controller->execute();
    }
    
    public function getController ()
    {
        try {
            $routeMatched = $this->router->run($this->request->getUri());
        }
        catch (\Exception $e) {
            if ($e->getCode() == Router::UNKNOWN_ROUTE) {
                $this->response->redirect404();
            }
        }

        $_GET = array_merge($_GET, $routeMatched->getParams());

        $controller = 'App'.DS.$this->name.DS.$routeMatched->getModule().DS.$routeMatched->getModule().'Controller';
        return new $controller($routeMatched->getCallable());
    }
}
