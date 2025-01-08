<?php

namespace app\Modals;

use app\Database\Connection;

class UserModals {
    private \PDO $connect;

    public function __construct(\PDO $connect) {
        $this->connect = $connect;
    }

    public function create($name, $nickname, $email, $password) {
        $stmt = $this->connect->prepare("INSERT INTO users_infos (name, nickname, email, password) VALUES (:name, :nickname, :email, :password)");
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

    public function getAll() {
        $stmt = $this->connect->prepare("SELECT * FROM users_infos");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByField($field, $value) {
        $stmt = $this->connect->prepare("
            SELECT * FROM users_infos WHERE $field = :value;");
        $stmt->bindValue(":value", $value);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function checkLogin($email, $password) {
        $stmt = $this->connect->prepare("
            SELECT * FROM users_infos WHERE email = :email AND password = :password;");
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}