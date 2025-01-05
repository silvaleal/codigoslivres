<?php

namespace app\Repositorys;

use app\database\Connection;

class UserReposity {
    private PDO $connect;

    public function __construct() {
        $this->connect = new Connection();
    }

    public function create($nickname, $email, $password) {
        $stmt = $this->connect->prepare("INSERT INTO users_infos (nickname, email, password) VALUES (:nickname, :email, :password)");
        $stmt->bindValue(":nickname", $nickname); // Ao usar o bindValue, evitamos o SQL Injection.
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
    }

    public function getAll() {
        $stmt = $this->connect->prepare("SELECT * FROM users_infos");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->connect->prepare("SELECT * FROM users_infos WHERE user_id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update($id, $field, $value) {
        $stmt = $this->connect->prepare("UPDATE users_infos SET :field = :value WHERE user_id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":field", $field);
        $stmt->bindValue(":value", $value);
        $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->connect->prepare("DELETE FROM users_infos WHERE user_id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

}