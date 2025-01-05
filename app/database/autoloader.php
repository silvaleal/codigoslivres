<?php

use app\database\Connection;

class DBAutoloader {
    private PDO $connect;

    public function __construct() {
        $this->connect = (new Connection())->getConnection();
    }

    private function querys() {
        return ["CREATE TABLE IF NOT EXISTS users_infos (
                user_id INT PRIMARY KEY AUTO_INCREMENT,
                nickname VARCHAR(15),
                email VARCHAR(45) UNIQUE,
                password VARCHAR(15),
                create_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                update_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                );"];
    }

    public function run() {
        foreach ($this->querys() as $query) {
            $result = $this->connect->exec($query);
        }
    }
}