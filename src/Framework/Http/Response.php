<?php
namespace Framework\Http;

class Response {

    public function addHeader($header)
    {
        header($header);
    }

    public function redirect($location)
    {
        header('Location: ' . $location);
        exit;
    }

    public function redirectTrailingSlash($uri)
    {
        if($uri !== $uri[0] && $uri[-1] === '/') {
            $this->addHeader('HTTP/1.1 301 Moved Permanently');
            $this->redirect(substr($uri, 0, -1));
            exit;
        }
    }

    public function redirect404()
    {
        $this->addHeader('HTTP/1.1 404 Not Found');
        exit('Erreur 404');
    }
}