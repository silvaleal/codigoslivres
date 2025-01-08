<?php

namespace app\Controllers;

use app\Modals\RepositoryModals;
use app\Modals\UserModals;

class HomeController {
    private RepositoryModals $repoModals;
    private UserModals $userModals;

    public function __construct(RepositoryModals $repoModals, UserModals $userModals) {
        $this->repoModals = $repoModals;
        $this->userModals = $userModals;
    }

    function index() {
        if ($_SESSION['login']) {
            header('location:/inicio');
            exit();
        }
        include "app/views/landingpage.php";
    }
    function rules() {
        return "Regras";
    }

    function home() {
        $repo = $this->repoModals;
        $user = $this->userModals;
        include "app/views/home.php";
    }
}