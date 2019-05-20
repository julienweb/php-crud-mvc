<?php
namespace Framework;

class App {

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'];

        //Redirect uri
        if ($uri !== $uri[0] && $uri[-1] === '/') {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . substr($uri, 0, -1));
            exit();
        }
        if ($uri === '/') {
            echo 'Bienvenue sur la page d\'accueil';
        }
        elseif ($uri === '/blog') {
            echo "Bienvenue sur le blog";
        }
        else {
            echo "Erreur 404";
        }
    }
}
