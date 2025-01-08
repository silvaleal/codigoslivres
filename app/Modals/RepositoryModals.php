<?php

namespace app\Modals;

use app\Database\Connection;

class RepositoryModals {
    private \PDO $connect;

    public function __construct(\PDO $connect) {
        $this->connect = $connect;
    }

    public function create($nickname, $email, $password) {
        $stmt = $this->connect->prepare("INSERT INTO users_infos (nickname, email, password) VALUES (:nickname, :email, :password)");
        $stmt->bindValue(":nickname", $nickname);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
    }

    public function update($id, $field, $value) {
        $stmt = $this->connect->prepare("UPDATE repositorys SET :field = :value WHERE id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":field", $field);
        $stmt->bindValue(":value", $value);
        $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->connect->prepare("DELETE FROM repositorys WHERE id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

    public function getAll() {
        $stmt = $this->connect->prepare("SELECT * FROM repositorys");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByField($field, $value) {
        $stmt = $this->connect->prepare("
            SELECT * FROM repositorys WHERE $field = :value;");
        $stmt->bindValue(":value", $value);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}