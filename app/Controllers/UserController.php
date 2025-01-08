<?php

namespace app\Controllers;

use app\Modals\UserModals;
use app\Services\UserServices;

class UserController {
    private UserModals $usermodals;
    private UserServices $userservices;

    public function __construct(UserModals $usermodals) {
        $this->usermodals = $usermodals;
        $this->userservices = new UserServices($this->usermodals);
    }

    public function show($params) {
        $user = $this->usermodals->getByField('nickname', $params['user']);
        
        if (!$user) {
            include "app/views/unknownUser.php";
            die();
        }

        $repos = $this->usermodals->getRepositorys($user['user_id']);
        include "app/views/user.php";
    }

    public function login() {
        if (isset($_SESSION['login'])) {
            header('Location: /inicio');
            exit();
        }

        if ($_POST) {
    
            $loginSuccess = $this->userservices->login($_POST['username'], $_POST['password']);
    
            if ($loginSuccess) {
                header('Location: /inicio');
                exit();
            } else {
                echo "Login falhou! Usuário ou senha incorretos.";
            }
        }
        include  "app/views/user/login.php";
    }

    public function create() {
        if (isset($_SESSION['login'])) {
            header('Location: /inicio');
            exit();
        }

        if ($_POST) {
            try {
                $create = $this->userservices->create(
                    $_POST['name'], $_POST['nickname'], $_POST['email'], $_POST['email2'], $_POST['password'], $_POST['password2']);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
            
        }

        include "app/views/user/create.php";
    }

}