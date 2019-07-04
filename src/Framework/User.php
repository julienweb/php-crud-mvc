<?php
namespace Framework;

use Framework\Http\Request;
use Framework\Http\Response;

session_start();
class User {

    private $response;

    public function __construct()
    {
        $this->response = new Response();
    }

    public function userAuthenticated()
    {
        if (!empty($_SESSION['auth'])) {
            return $_SESSION['auth'];
        }
        return false;
    }

    public function logout()
    {
        unset($_SESSION['auth']);
        $_SESSION['flash']['success'] = 'Vous êtes bien déconnecté.';
        $this->response->redirect($_SERVER['REQUEST_URI'] = '/');
        exit;
    }
}
