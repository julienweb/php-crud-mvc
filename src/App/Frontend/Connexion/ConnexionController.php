<?php
namespace App\Frontend\Connexion;

use Framework\Controller;
use Framework\User;

class ConnexionController extends Controller {

    public function __construct($callable)
    {
        parent::__construct($callable);
        $this->model = new ConnexionModel();
        $this->module = 'Connexion';
        $this->user = new User();
    }

    public function login()
    {
        if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
            if ($this->formValidate() !== false) {
                $this->response->redirect('admin/dashboard');
                exit;
            }
        }
        return $this->view->render($this->module, 'index.php');
    }

    public function formValidate()
    {
        $getLog = $this->model->userVerify(
            htmlspecialchars($_POST['username']),
            htmlspecialchars($_POST['password'])
        );

        if ($getLog !== false) {
            $_SESSION['auth'] = $getLog;
            $_SESSION['success'] = 'Vous êtes bien connecté.';
            return $_SESSION['auth'];
        }
        else {
            $_SESSION['danger'] = 'Identifiant ou mot de passe incorrect';
            return false;
        }
    }

    public function logout()
    {
        $this->user->logout();
    }
}
