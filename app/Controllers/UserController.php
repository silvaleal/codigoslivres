<?php

namespace app\Controllers;

use app\Modals\UserModals;
use app\Services\UserServices;

class UserController {
    private UserModals $usermodals;
    private UserServices $userservices;

    public function __construct(UserModals $usermodals, UserServices $userservices) {
        $this->usermodals = $usermodals;
        $this->userservices = $userservices;
    }

    public function show($params) {
        $user = $this->usermodals->getByField('nickname', $params['user']);
        $page = FILTER_INPUT(INPUT_GET, "page", FILTER_SANITIZE_SPECIAL_CHARS);
        if (!$page) {$page = 1;} // Sistema para as páginas dos repositórios

        if (!$user) {
            include "app/views/unknownUser.php";
            die();
        }

        $repos = $this->usermodals->getRepositorys($user['user_id']);
        include "app/views/user/index.php";
    }

    public function login() {
        if (isset($_SESSION['login'])) {
            header('Location: /inicio');
            exit();
        }

        if ($_POST) {
            try {
                $loginSuccess = $this->userservices->login($_POST['email'], $_POST['password']);
                header('Location: /inicio');
                exit();
            } catch (\Exception $e) {
                setFlashMsg('login', $e->getMessage());
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
                setFlashMsg('createUser', $e->getMessage());
            }
        }
        include "app/views/user/create.php";
    }

}