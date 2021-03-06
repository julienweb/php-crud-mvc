<?php
namespace Framework;

use Framework\Http\Request;
use Framework\Http\Response;

abstract class App
{

    protected $request;
    protected $response;
    protected $router;
    public $name;

    protected function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router();
        $this->name = '';
    }

    abstract public function run();

    public function getName()
    {
        return $this->name;
    }
}
