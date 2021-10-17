<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function add_work()
    {
        return view('add_work');
    }
}
