<?php
session_start();
require "vendor/autoload.php";

#############################################
#                                           #
#     Área para informações do projeto      #
#                                           #
#############################################
define('PROJECT_NAME', 'CodigosLivres');
define('CONTROLLER_PATH', "app\\Controllers\\");
define('GITHUB_REPO', 'https://github.com/silvaleal/codigoslivres');

#############################################
#                                           #
#           Área do banco de dados          #
#                                           #
#############################################
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBDATABASE', 'codigoslivres');

#############################################
#                                           #
#              Área das funções             #
#                                           #
#############################################
function getControllerPath($controller) {
    return CONTROLLER_PATH.$controller."Controller";
}