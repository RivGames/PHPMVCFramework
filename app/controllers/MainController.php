<?php
namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction()
    {
//        $this->layout = false;
//        $posts = $model->findAll();
//        $post = $model->findOne(1);
//        $post3 = $model->findBySql("SELECT * FROM {$model->table} WHERE id=3");
//        $post2 = $model->findLike('post2','title','posts');
        $model = new Main();
        $posts = \R::findAll('posts');
        $post = \R::findOne('posts',2);
        $menu = $this->menu;
        $this->setMeta($post->title,'Description','KEYWORDSss');
        $meta = $this->meta;
        $this->set(compact('title','posts','menu','meta'));
    }

    public function testAction()
    {
        $this->layout = 'test';

    }
}