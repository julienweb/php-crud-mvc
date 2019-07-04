<?php
namespace Framework;

use Framework\Http\Request;
use Framework\Http\Response;

class Controller {
    
    protected $model;
    protected $view;
    protected $module;
    protected $callable = '';
    protected $request;
    protected $response;
    protected $user;
    
    public function __construct($callable)
    {
        $this->view = new Page();
        $this->request = new Request();
        $this->response = new Response();
        $this->setCallable($callable);
    }

    public function execute()
    {
        $callable = $this->callable;
        if (!is_callable([$this, $this->callable])) {
            throw new \InvalidArgumentException('L\'action"' . $this->callable . '" n\'est pas définie sur ce module');
        }
        $this->$callable($this->request);
    }

    private function setCallable($callable)
    {
        if (!is_string($callable) || empty($callable)) {
            throw new \InvalidArgumentException("L'action doit être une chaîne de caractère");
        }
        $this->callable = $callable;
    }
}
