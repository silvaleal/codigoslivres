<?php

use app\database\Connection;

class DBAutoloader {
    private PDO $connect;

    public function __construct() {
        $this->connect = (new Connection())->getConnection();
    }

    public function run() {
        $querys = require "querys.php";
        foreach ($querys as $query) {
            $result = $this->connect->exec($query);
        }
    }
}