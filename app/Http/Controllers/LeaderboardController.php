<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LeaderboardController extends Controller
{
    public function showLeadPage()

    {
        return view('layouts.main.leaderboard'); // make sure you have a view named 'vote.blade.php'
    }
}
