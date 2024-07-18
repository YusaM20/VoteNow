<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage()
    {
        return view('layouts.main.home'); // make sure you have a view named 'vote.blade.php'
    }
}
