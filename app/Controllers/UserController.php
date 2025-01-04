<?php

namespace app\Controllers;

class UserController {
    
    function index() {
        return "UserController index";
    }
    function show($params) {
        return $params;
    }
}