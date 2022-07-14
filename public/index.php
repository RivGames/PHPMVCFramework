<?php
include_once '../vendor/libs/helper.php';
require_once '../vendor/core/Router.php';
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
//require_once '../app/controllers/Main.php';
//require_once '../app/controllers/Post.php';
//require_once '../app/controllers/PostNew.php';
spl_autoload_register(function ($class) {
    $file = APP . "/controllers/$class.php";
    if (is_file($file)) {
        require_once $file;
    }
});
$url = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('^pages/?(?P<action>[a-z-]+)?$', ['controller' => 'Post', 'action' => 'index']);
//default routes
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($url);