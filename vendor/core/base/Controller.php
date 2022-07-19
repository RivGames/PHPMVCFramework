<?php

namespace vendor\core\base;
abstract class Controller
{
    public array $route = [];
    public  $view;
    public  $layout;
    public array $vars = [];
    public function __construct($route)
    {
        $this->route = $route;
//        $this->view = $route['action'];
//        include APP . "/views/{$route['controller']}/{$this->view}.php";
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }
    public function set($vars){
        $this->vars = $vars;
    }
}