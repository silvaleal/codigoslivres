<?php

namespace app\Controllers;

use app\Modals\RepositoryModals;

class RepositoryController { #crud
    public RepositoryModals $repository;

    function __construct(RepositoryModals $repository) {
        $this->repository = $repository;
    }

    function create() {
        if (!$_SESSION['login']) {
            header('location:/user/login');
            exit();
        }

        if ($_POST) {
            $repo = $this->repository->create(
                $_SESSION['login']['user_id'], 
                $_POST['title'], 
                $_POST['description'], 
                $_POST['short_description'],
                $_POST['url']
            );
            header("location:/repository/".$this->repository->getLastByUser($_SESSION['login']['user_id'])['id']);
            exit();
        }
        include "app/Views/repositorys/create.php";
    }

    function show($params) {
        $repo = $this->repository->getByField('id', intval($params['repository']));
        
        if(!$repo) {
            include 'app/Views/unknown.php';
            exit();
        }
        
        include "app/Views/repositorys/index.php";
    }
}