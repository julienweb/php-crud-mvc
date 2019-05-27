<?php
namespace App\Frontend\Home;

class HomeController {

    public function index ()
    {
        ob_start();
        require 'src/App/Frontend/Home/view/index.php';
        $content = ob_get_clean();
        require 'template/layout.php';
    }
}
