<?php

require __DIR__."/../helpers.php";


use app\database\Connection;
$con = new Connection();
var_dump($con->getConnection());

var_dump(Router::index());

