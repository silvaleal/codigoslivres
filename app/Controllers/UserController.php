<?php

namespace app\Controllers;

use app\Repositorys\UserRepository;

class UserController {
    private \PDO $connect;

    public function __construct(\PDO $connect) {
        $this->connect = $connect;
    }

    public function show($params) {
        $userepository = (new UserRepository($this->connect));
        $user = $userepository->getByField('nickname', $params['user']);
        
        if (!$user) {
            include "app/views/unknownUser.php";
            return;
        }

        $repos = $userepository->getRepositorys($user['user_id']);
        include "app/views/user.php";
    }

    public function login() {
        echo "e";
        die();
    } 

}