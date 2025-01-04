<?php

namespace app\Repositorys;

use app\database\Connection;

class UserReposity {
    private PDO $connect;

    public function __construct() {
        $this->connect = new Connection();
    }

    public function create() {

    }

    public function getAll() {

    }

    public function getById($id) {

    }

    public function update($id) {

    }

    public function delete($id) {}
}