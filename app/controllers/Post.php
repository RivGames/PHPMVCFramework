<?php

namespace app\controllers;
use vendor\core\base\Controller;

class Post extends Controller
{
    public function testAction()
    {
        debug($this->route);
    }
}