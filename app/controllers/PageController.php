<?php

namespace app\controllers;

use vendor\core\base\Controller;

class PageController extends AppController
{

    public function viewAction()
    {
        $this->layout = 'main';
        $menu = $this->menu;
        $title = 'PAGE';
        $this->set(compact('title','menu'));
    }

    public function testAction()
    {

    }
}