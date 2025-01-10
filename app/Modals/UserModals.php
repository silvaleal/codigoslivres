<?php

namespace app\Modals;

use app\Database\Connection;

class UserModals {
    private \PDO $connect;

    public function __construct(\PDO $connect) {
        $this->connect = $connect;
    }

    public function create($name, $nickname, $email, $password) {
        $stmt = $this->connect->prepare("INSERT INTO users (name, nickname, email, password) VALUES (:name, :nickname, :email, :password)");
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":nickname", $nickname); // Ao usar o bindValue, evitamos o SQL Injection.
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
    }

    public function getRepositorys($authorID) {
        $stmt = $this->connect->prepare("
            SELECT * FROM repositorys WHERE author_id = :id;");
        $stmt->bindValue(":id", $authorID);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update($id, $field, $value) {
        $stmt = $this->connect->prepare("UPDATE users SET :field = :value WHERE user_id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":field", $field);
        $stmt->bindValue(":value", $value);
        $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->connect->prepare("DELETE FROM users WHERE user_id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

    public function getAll() {
        $stmt = $this->connect->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getLimitUsers($limit) {
        $stmt = $this->connect->prepare("SELECT * FROM users LIMIT :limit");
        $stmt->bindValue(":limit", $limit, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByField($field, $value) {
        $stmt = $this->connect->prepare("
            SELECT * FROM users WHERE $field = :value;");
        $stmt->bindValue(":value", $value);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}