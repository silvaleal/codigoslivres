<?php
namespace app\database;

class Connection {
    private \PDO $conn;

    public function __construct() {
        try {
            $this->conn = new \PDO("mysql:host=".DBHOST.";dbname=".DBDATABASE, DBUSER, DBPASSWORD);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
            $this->conn = null;
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
