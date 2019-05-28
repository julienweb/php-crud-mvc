<?php
namespace Framework;

use Framework\Http\Request;

class Page
{
    private $request;
    private $app;
    
    public function __construct()
    {
        $this->request = new Request();
        $this->app = $this->request->getApp();
    }

    public function render(string $module, string $file, ?array $vars = null)
    {
        if (!is_null($vars)){
            extract($vars);
        }

        ob_start();
        require 'src/App/'.$this->app.DS.$module.DS.'view/'.$file;
        $content = ob_get_clean();
        require 'src/App/'.$this->app.DS.'template/layout.php';
    }
}
