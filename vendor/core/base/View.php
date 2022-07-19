<?php

namespace vendor\core\base;

class View
{
    public $route = [];
    public $view;
    public $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        if ($layout === false) {
            $this->layout = false;
        } else {

            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;
    }

    public function render($vars)
    {
        extract($vars);
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (isset($file_view)) {
            require $file_view;
        } else {
            echo "<p>Not found view!<b>{$file_view}</b></p>";
        }
        $content = ob_get_clean();
        if (false !== $this->layout) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)) {
                require $file_layout;
            } else {
                echo 'не найден шаблон' . $file_layout;
            }
        }


    }
}