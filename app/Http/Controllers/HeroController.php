<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Hero;
use App\Models\HeroRole;

class HeroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
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
        return view('hero.hero', compact('heros'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function create()
    {
        $heroroles = HeroRole::get();
        // dd($heroroles);
        return view('hero.create', compact('heroroles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/hero/';
            $file->move($path, $filename);
        }

        $value = [
            'hero_role_id' => $request->hero_role_id,
            'name' => $request->name,
            'specially' => $request->specially,
            'lane' => $request->lane,
            'type' => $request->type,
            'image' => $path . $filename,

        ];

        Hero::create($value);
        return redirect('hero');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $hero = Hero::find($id);
        $heroroles = HeroRole::all();
        // dd($todo);
        return view('hero.edit', compact('hero', 'heroroles'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, $id)
    {

        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        $updatehero = Hero::where('id', $id)->first();
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/hero/';
            $file->move($path, $filename);

            if (File::exists($updatehero->image)) {
                File::delete($updatehero->image);
            }
        }

        $value = [
            'hero_role_id' => $request->hero_role_id,
            'name' => $request->name,
            'specially' => $request->specially,
            'lane' => $request->lane,
            'type' => $request->type,
            'image' => isset($filename) ? $path . $filename : $updatehero->image,
        ];

        $updatehero->update($value);
        return redirect('hero');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $hero = Hero::find($id)->first();
        if (File::exists($hero->image)) {
            File::delete($hero->image);
        }
        $hero->delete();
        return redirect('hero');
    }
}
