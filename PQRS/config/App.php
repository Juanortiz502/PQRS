<?php

namespace Config;

class App{

    public $host, $dbUser, $password, $dbName;

    public function __construct(){
        //set of var
        $this->host = $_ENV('DB_HOST');
        $this->dbUser = $_ENV('DB_USER');
        $this->password = $_ENV('DB_PASSWORD');
        $this->dbName = $_ENV('DB_NAME');
    } 
}

