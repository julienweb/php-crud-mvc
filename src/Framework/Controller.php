<?php
namespace Framework;

class Controller {
    
    protected $model;
    protected $view;
    protected $module;
    
    public function __construct()
    {
        $this->view = new Page();
    }
}
