<?php

require __DIR__."/../helpers.php";

(new DBAutoloader)->run();
var_dump(Router::index());
// Router::index();
