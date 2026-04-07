<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Aspirasi;

class AuthController extends Controller
{
    public function loginSiswa(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'password' => 'required'
        ]);

        $credentials = $request->only('nisn', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'siswa') {
                $request->session()->put('role', 'siswa');
                $request->session()->put('nama', Auth::user()->name);

                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['nisn' => 'Akun ini bukan siswa.']);
            }
        }

        return back()->withErrors(['nisn' => 'NISN atau password salah.']);
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                $request->session()->put('role', 'admin');
                $request->session()->put('nama', Auth::user()->name);

                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'Akun ini bukan admin.']);
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function registerSiswa(Request $request)
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return redirect()->route('dashboard')->with('error', 'Hanya admin yang bisa menambah siswa.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'nisn' => 'required|numeric|unique:users,nisn',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'password' => bcrypt($request->password),
            'role' => 'siswa',
        ]);

        return redirect()->route('dashboard')->with('success', 'Akun siswa berhasil dibuat.');
    }

    public function dashboard(Request $request)
    {
        if (session('role') === 'siswa') {
            $aspirasi = Aspirasi::where('user_id', Auth::id())
                ->when($request->search, function($q) use ($request) {
                    $q->where('kategori', 'like', "%{$request->search}%")
                      ->orWhere('lokasi', 'like', "%{$request->search}%")
                      ->orWhere('keterangan', 'like', "%{$request->search}%");
                })
                ->latest()->get();
            $users = null;
        } else {
            $aspirasi = Aspirasi::with('user')
                ->when($request->search, function($q) use ($request) {
                    $q->where('kategori', 'like', "%{$request->search}%")
                      ->orWhere('lokasi', 'like', "%{$request->search}%")
                      ->orWhere('keterangan', 'like', "%{$request->search}%");
                })
                ->when($request->user_id, function($q) use ($request) {
                    $q->where('user_id', $request->user_id);
                })
                ->latest()->get();

            $users = User::where('role', 'siswa')->get();
        }

        return view('dashboard', [
            'nama' => session('nama'),
            'role' => session('role'),
            'aspirasi' => $aspirasi,
            'users' => $users
        ]);
    }

    public function createSiswa()
    {
        return view('siswa.create');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
