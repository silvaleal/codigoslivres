<?php

namespace app\Controllers;

class RepositoryController { #crud
    function create() {
        return "create";
    }

    function index() {
        return "index";
    }

    function delete() {
        return "delete";
    }

    function show($params) {
        return $params;
    }
}