<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Battlefield;

class HomeController extends Controller
{
    public function index(Battlefield $battlefield)
    {
        return view('home', ['title' => 'Home Page', 'battlefield' => $battlefield->__serialize()]);
    }
}