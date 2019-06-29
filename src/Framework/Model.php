<?php
namespace Framework;

use Database\PDOFactory;

class Model {

    protected $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnexion();
    }
}
