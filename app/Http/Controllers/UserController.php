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
        return view('user.login');
    }

    public function loginAuth(Request $request)
    {
        //validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Coba dapatkan pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // dd($user);
        // Jika pengguna ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Buat session atau token autentikasi
            Auth::login($user);
            // dd($user, "Berhasil Login");
            return redirect('dashboard');
        }

        // dd($user, "Gagal Login");
        return redirect('user/login');
    }

    public function register()
    {
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
