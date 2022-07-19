<?php
namespace app\controllers;

class MainController extends AppController
{
    public $layout = 'main';
    public function indexAction()
    {
//        $this->layout = false;
        $this->set(['name' => 'Ihor']);
    }
}