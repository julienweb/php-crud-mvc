<?php
namespace Framework\Http;

class Request {

    public function dataPOST($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }

    public function dataGET($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : null;
    }

    public function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getApp()
    {
        if (!isset($_GET['app']) ) {
            throw new \Exception("L'application est vide");
        }
        return $_GET['app'];
    }
}
