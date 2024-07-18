<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function showVotePage()
    {
        return view('layouts.main.voting'); // make sure you have a view named 'vote.blade.php'
    }
    public function voteForCharacter(Request $request, $character)
    {
        // Handle the voting logic here
        // $character contains the character being voted for
        return redirect()->back()->with('message', 'Thank you for voting!');
    }
}
