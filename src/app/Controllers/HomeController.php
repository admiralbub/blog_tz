<?php

namespace App\Controllers;


class HomeController
{
    public function index()
    {
        view('index', [
            'title' => 'Главная страница',
            'name' => 'Артем'
        ]);
    }


}