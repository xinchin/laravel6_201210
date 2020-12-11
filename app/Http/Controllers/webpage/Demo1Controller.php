<?php

namespace App\Http\Controllers\webpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Demo1Controller extends Controller
{
    public function index()
    {
        return view('webpage.demo1');
    }
}
