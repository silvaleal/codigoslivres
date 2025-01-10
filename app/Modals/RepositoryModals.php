<?php

namespace app\Modals;

use app\Database\Connection;

class RepositoryModals {
    private \PDO $connect;

    public function __construct(\PDO $connect) {
        $this->connect = $connect;
    }

    public function create($author_id, $title, $description, $shortDescription, $url) {
        $stmt = $this->connect->prepare("
            INSERT INTO repositorys (author_id, title, description, short_description, url) 
            VALUES (:author_id, :title, :description, :shortDescription, :url)");
        $stmt->bindValue(":author_id", $author_id);
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":description", $description);
        $stmt->bindValue(":shortDescription", $shortDescription);
        $stmt->bindValue(":url", $url);
        $stmt->execute();
    }

    public function getAll() {
        $stmt = $this->connect->prepare("SELECT * FROM repositorys");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getLimitRepositorys($limit) {
        $stmt = $this->connect->prepare("SELECT * FROM repositorys LIMIT :limit");
        $stmt->bindValue(":limit", $limit, \PDO::PARAM_INT);
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

    public function getLastByUser($user_id) {
        $stmt = $this->connect->prepare("
            SELECT * FROM repositorys WHERE author_id = :user_id ORDER BY id DESC LIMIT 1;");
        $stmt->bindValue(":user_id", $user_id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}