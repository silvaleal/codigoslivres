<?php

namespace app\Controllers;

class HomeController {
    function index() {
        include "app/views/home.php";
    }
    function rules() {
        return "Regras";
    }
}