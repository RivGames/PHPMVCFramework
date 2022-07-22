<?php

require 'rb-mysql.php';
$db = require '../config/config_db.php';
R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze(true);
R::fancyDebug(true);
//var_dump(R::testConnection());(true)

//Create
//$category = R::dispense('category');
//$category->title = 'Категория 4 ';
//R::store($category);

//Read
//$category = R::load('category',2);
//print_r($category);

//Update
//$category = R::load('category',2);
//echo $category['title'];
//echo '<br>';
//$category['title'] = 'Category 2';
//R::store($category);

//Delete
//$category = R::load('category',2);
//R::trash($category);
//R::wipe('category');

//$categories = R::findAll('category');
//print_r($categories);

//$category_1 = R::findOne('category',"WHERE id = 3");
//print_r($category_1);

