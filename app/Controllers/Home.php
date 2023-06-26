<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $title = "Home";
        return view('guest/home', ['title' => $title]);
    }
    
    public function aboutUs () {
        $title = 'How Likey works';
        return view('guest/about', ['title' => $title]);
    }
}
