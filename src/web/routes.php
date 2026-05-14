<?php

$router->get('/', 'HomeController@index');
$router->get('/category/{id}', 'CategoryController@index');
$router->get('/article/{id}', 'ArticleController@show');