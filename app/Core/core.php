<?php

namespace app\core;

use app\Database\Connection;
use app\Modals\UserModals;
use app\Modals\RepositoryModals;
use app\Services\UserServices;

class Core {
    public static function index($matchUri, $params=[]) {
        [$controller, $method] = explode('@', $matchUri);
        $namespace = getControllerPath($controller);

        if (class_exists($namespace)) {
            // https://www.php.net/manual/en/class.reflectionclass.php - Documentação do ReflectionClass
            $reflection = new \ReflectionClass($namespace); // ReflectionClass pega informações de uma classe 
            $constructor = $reflection->getConstructor();
            $dependencies = [];

            if ($constructor) {
                foreach ($constructor->getParameters() as $value) {
                    switch ($value->getType()->getName()) {
                        case 'PDO':
                            $dependencies[] = (new Connection)->getConnection();
                            break;

                        case 'app\Modals\UserModals':
                            $dependencies[] = new UserModals((new Connection())->getConnection());
                            break;

                        // * DEV NOTE * Infelizmente não encontrei outra maneira para fazer isso
                        // * DEV NOTE * então, terei que usar esta forma para instanciar o UserServices 
                        // * DEV NOTE * no controller dos users

                        // * DEV NOTE * Caso você, leitor, tenha sugestões de como melhorar agradeceria.
                        case 'app\Services\UserServices': 
                            $dependencies[] = new UserServices(new UserModals((new Connection())->getConnection()));
                            break;

                        case 'app\Modals\RepositoryModals':
                            $dependencies[] = new RepositoryModals((new Connection())->getConnection());
                            break;
                    }

                }
                $instance = $reflection->newInstanceArgs($dependencies);
            } else {$instance = new $namespace();}

            if (!method_exists($instance, $method)) {
                return "Método $method não encontrado em $controller";
            }
            return $instance->$method($params);
        }
        return "Controller não encontrado!";
    }
}