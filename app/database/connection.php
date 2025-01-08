<?php
namespace app\Database;

class Connection {
    private \PDO $connect;

    public function __construct() {
        try {
            $this->connect = new \PDO("mysql:host=".DBHOST.";dbname=".DBDATABASE, DBUSER, DBPASSWORD);
            $this->connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $exception) {
            include "app/views/errors/erroDatabase.php";
            die();
        }
    }

    public function loadQueries() {
        $querys = require "querys.php";
        foreach ($querys as $query) {
            $this->connect->exec($query);
        }
    }

    public function getConnection() {
        $this->loadQueries();
        return $this->connect;
    }
}