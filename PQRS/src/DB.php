<?php

namespace Base;

use Config\App;

class DB{

    protected $connect;

    public function __construct(){
        $app = new App();
        // echo $app->dbUser;

        $this->connect = mysqli_connect($app->host,
        $app->dbUser,
        $app->password, 
        $app->dbName);
        if(mysqli_connect_errno())
        echo "Error de conexion";
    }

    public function query(string $table, string $field = 'a'){
        $stringQuery = "SELECT $field FROM $table";
        $dataQuery = mysqli_query($this->connect, $stringQuery)
        $row = mysqli_fetch_all($dataQuery, MSQLI_ASSOC);
        return $row;
    }
}