<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Hero;
use App\Models\HeroRole;

class VoteController extends Controller
{
    public function showVotePage()

    {
        $heros = Hero::join('hero_roles', 'hero_roles.id', '=', 'heros.hero_role_id')
            ->select(
                'hero_roles.*',
                'heros.id as hero_id',
                'heros.hero_role_id',
                'heros.name',
                'heros.specially',
                'heros.lane',
                'heros.type',
                'heros.image',
            )
            ->get();
            // return view('hero.hero', compact('heros'));

        return view('layouts.main.voting', compact('heros')); // make sure you have a view named 'vote.blade.php'
    }
    public function voteForCharacter(Request $request, $character)
    {
        // Handle the voting logic here
        // $character contains the character being voted for
        return redirect()->back()->with('message', 'Thank you for voting!');
    }
}
