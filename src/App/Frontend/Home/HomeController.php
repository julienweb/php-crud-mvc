<?php
namespace App\Frontend\Home;

use Framework\Controller;

class HomeController extends Controller {

    public function __construct($callable)
    {
        parent::__construct($callable);
        $this->module = 'Home';
    }

    public function index ()
    {
        return $this->view->render($this->module, 'index.php');
    }
}
