<?php
namespace Framework\Http;

class Request {

    public function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function dataGET($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : null;
    }

    public function dataPOST($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }
}