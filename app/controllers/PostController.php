<?php

namespace app\controllers;
use vendor\core\base\Controller;

class PostController extends AppController
{
    public function testAction()
    {
        debug($this->route);
    }
}