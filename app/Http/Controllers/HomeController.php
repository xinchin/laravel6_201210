<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $myname = 'nelson';
        return view('home', ['name'=>$myname]);
    }
}
