<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function faq()
    {
        return view('faq');
    }
    public function blog()
    {
        return view('blog');
    }

}
