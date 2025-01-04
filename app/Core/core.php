<?php

namespace app\core;

class Core {
    public static function index($matchUri, $params=[]) {
        [$controller, $method] = explode('@', $matchUri);
        $namespace = getControllerPath($controller);

        if (class_exists($namespace)) {
            $instance = new $namespace;
            if (!method_exists($instance, $method)) {
                return "Método $method não encontrado em $controller";
            }
            return $instance->$method($params);
        }
        return $namespace;
    }
}