<?php

namespace Estoque\Http\Controllers;

use Estoque\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('layouts/home');
    }
}

