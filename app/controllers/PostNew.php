<?php
namespace app\controllers;
class PostNew
{
    public function __construct()
    {
        debug('class=PostNew');
    }

    public function indexAction()
    {
        echo 'PostNew->method=index';
    }

    public function testAction()
    {
        
    }

    public function testPageAction()
    {
        echo 'hi its method testPage from PostNew';
    }

    public function before()
    {
        echo 'before';
    }
}