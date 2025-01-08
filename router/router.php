<?php

use app\core\Core;

class Router {
    private static function getExactUri($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            return [$uri => $routes[$uri]];
        }
        return [];
    }

    private static function getDynamicUri($uri, $routes) {
        return array_filter($routes, function ($value) use ($uri) {
            $result = str_replace('/', '\/', ltrim($value, '/'));
            return preg_match("/^$result$/", $uri);
        }, ARRAY_FILTER_USE_KEY);
    }

    private static function getParams($uri, $matchUri) {
        $formatUri = explode('/', $uri);
        $dif = array_diff($formatUri, explode('/', array_keys($matchUri)[0]));
        return [$formatUri[0] => $dif[1]];
    }

    public static function index() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $routes = include "routes.php";
        $matchUri = self::getExactUri($uri, $routes);
        
        if (empty($matchUri)) {
            $uri = ltrim(rtrim($uri, '/'), '/');
            $matchUri = self::getDynamicUri($uri, $routes);
            $params = self::getParams($uri, $matchUri);
            return Core::index(array_values($matchUri)[0], $params);
        }
        return Core::index(array_values($matchUri)[0]);
    }
}