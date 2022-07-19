<?php
namespace app\controllers;
class PostNewController extends AppController
{
    public function __construct()
    {
        debug('class=PostNewController');
    }

    public function indexAction()
    {
        echo 'PostNewController->method=index';
    }

    public function testAction()
    {
        
    }

    public function testPageAction()
    {
        echo 'hi its method testPage from PostNewController';
    }

    public function before()
    {
        echo 'before';
    }
}