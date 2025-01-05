<?php

namespace app\Controllers;

use app\Repositorys\UserRepository;

class UserController {
    
    function index() {
        return "UserController index";
    }
    function show($params) {
        $user = (new UserRepository())->getAll();
        return $user;
    }
}