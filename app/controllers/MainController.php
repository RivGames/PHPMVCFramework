<?php
namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public $layout = 'main';
    public function indexAction()
    {
//        $this->layout = false;
        $title = 'Main';
        $model = new Main();
        $posts = $model->findAll();
        $post = $model->findOne(1);
        $post3 = $model->findBySql("SELECT * FROM {$model->table} WHERE id=3");
        $post2 = $model->findLike('post2','title','posts');
        debug($post2);
        $this->set(compact('title','posts','post'));
    }
}