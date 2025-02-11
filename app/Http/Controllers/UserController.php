<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function login()
    {
        if (Auth::check()) {
            if (Auth::user()->group === 'admin') {
                return redirect('/dashboard');
            }

            return redirect('/');
        }

        return view('user.login');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user); // Pindahkan ini sebelum redirect

            if ($user->group == 'admin') {
                // dd("kamu admin");
                return redirect('/dashboard');
            } else {
                // dd("kamu user");
                return redirect('/'); // Redirect ke halaman user
            }
        }
        // dd("aneh", $user);
        return redirect('user/login');
    }


    public function register()
    {
        if (Auth::check()) {
            if (Auth::user()->group === 'admin') {
                return redirect('/dashboard');
            }

            return redirect('/');
        }
        return view('user.register');
    }

    public function storeRegister(Request $request)
    {
        $value = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'group' => 'user',
        ];

        // dd($value);

        User::create($value);
        return redirect('user/login');
    }

    public function profile()
    {
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user/login')->with('success', 'Logged out successfully!');
    }

    // Fungsi untuk menampilkan semua user
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // Fungsi untuk menampilkan form edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    // Fungsi untuk mengupdate data user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect('user');
    }

    // Fungsi untuk menghapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('user');
    }
}
