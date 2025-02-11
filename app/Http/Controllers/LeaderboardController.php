<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Hero;
use App\Models\HeroRole;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function showLeadPage()
    {
        $votes = Hero::join('votes', 'votes.hero_id', '=', 'heros.id')
            ->join('hero_roles', 'heros.hero_role_id', '=', 'hero_roles.id')
            ->select('heros.*', 'hero_roles.role as hero_role_name', DB::raw('COUNT(votes.hero_id) as total_points'))
            ->groupBy('heros.id', 'hero_roles.role')
            ->orderBy('total_points', 'desc')
            ->get();

        return view('layouts.main.leaderboard', compact('votes'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user/login')->with('success', 'Logged out successfully!');
    }
}
