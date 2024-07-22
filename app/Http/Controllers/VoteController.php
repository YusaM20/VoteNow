<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Hero;
use App\Models\HeroRole;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function showVotePage()

    // {
    //     $heros = Hero::join('hero_roles', 'hero_roles.id', '=', 'heros.hero_role_id')
    //         ->select(
    //             'hero_roles.*',
    //             'heros.id as hero_id',
    //             'heros.hero_role_id',
    //             'heros.name',
    //             'heros.specially',
    //             'heros.lane',
    //             'heros.type',
    //             'heros.image',
    //         )
    //         ->get();
    //         // return view('hero.hero', compact('heros'));

    //     return view('layouts.main.voting', compact('heros')); // make sure you have a view named 'vote.blade.php'
    // }
    // public function voteForCharacter(Request $request, $character)
    // {
    //     // Handle the voting logic here
    //     // $character contains the character being voted for
    //     return redirect()->back()->with('message', 'Thank you for voting!');
    // }


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
        return view('layouts.main.voting', compact('heros'));
    }

    public function voteForCharacter(Request $request, $character)
    {
        // Handle voting logic
        return redirect()->back()->with('message', 'Thank you for voting!');
    }

    public function leaderboard()
    {
        $votes = Hero::join('votes', 'votes.hero_id', '=', 'heros.id')
            ->select('heros.*', DB::raw('SUM(votes.points) as total_points'))
            ->groupBy('heros.id')
            ->orderBy('total_points', 'desc')
            ->get();

        return view('layouts.main.leaderboard', ['votes' => $votes]);
    }

    public function storeVote(Request $request)
    {
        // Validasi input
        // Periksa apakah pengguna sudah memberikan suara
        $existingVote = DB::table('votes')
            ->where('user_id', $request->user_id)
            ->first();

        if ($existingVote) {
            // Jika sudah ada, redirect kembali dengan pesan error
            return redirect('vote')->with('error', 'Anda sudah memberikan suara.');
        }

        // Jika belum ada, simpan vote ke database
        DB::table('votes')->insert([
            'hero_id' => $request->hero_id,
            'user_id' => $request->user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect dengan pesan sukses
        return redirect('leaderboard')->with('success', 'Vote has been recorded.');

        // $value = [
        //     'hero_id' => $request->hero_id,
        //     'user_id' => $request->user_id
        // ];

        // // dd($value);

        // Vote::create($value);
        // return redirect('leaderboard')->with('success', 'Vote has been recorded.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user/login')->with('success', 'Logged out successfully!');
    }
}
