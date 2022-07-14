<?php

class Router
{
    protected static array $routes = [];
    protected static array $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {
            $controller = self::upperCamelCase(self::$route['controller']);
            if (class_exists($controller)) {
                $cObj = new $controller();//create an instance of controller object
                $action = self::lowerCamelCase(self::$route['action'])  . 'Action';
                if (method_exists($cObj, $action)) {
                    $cObj->$action();
                } else {
                    echo 'Method ' . $action . ' doesnot exists ' . 'Controller = '.$controller . ' ';
                }
            } else {
                debug('Controller ' . $controller . ' was not founded');
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }

    protected static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }
    protected static function lowerCamelCase($name)
    {
//        $name = str_replace('-',' ',$name);
//        $name = lcfirst($name);
        return str_replace(' ', '', lcfirst(str_replace('-', ' ', $name)));
    }
}