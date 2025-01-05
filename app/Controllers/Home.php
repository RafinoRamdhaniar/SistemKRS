<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('/index');
    }

    public function krs()
    {
        return view('/krs');
    }

    public function profile()
    {
        return view('/profile');
    }

    public function bantuan()
    {
        return view('/bantuan');
    }
}
