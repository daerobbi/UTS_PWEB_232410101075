<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $users = [
        [
            'email' => 'user1@gmail.com',
            'password' => 'password123',
        ],
        [
            'email' => 'user2@gmail.com',
            'password' => 'password123',
        ],
    ];

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        foreach ($this->users as $user) {
            if ($user['email'] === $email && $user['password'] === $password) {
                session(['username' => $email]);

                return redirect()->route('dashboard')->with('success', 'Login berhasil!');
            }
        }

        return redirect()->back()->with('error', 'Email atau password salah.');
    }


    public function dashboard(Request $request)
    {
        $username = session('username', 'Rekan Tani');

        return view('dashboard', compact('username'));
    }

    private $bibitData = [
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '30/04/2025',
            'nama_bibit'    => 'Cabe Rawit',
            'jumlah_tanam' => 125,
            'jumlah_panen' => 125,
        ],
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '01/05/2025',
            'nama_bibit'    => 'Terong Hijau',
            'jumlah_tanam' => 125,
            'jumlah_panen' => 125,
        ],
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '01/05/2025',
            'nama_bibit'    => 'Sawi',
            'jumlah_tanam' => 125,
            'jumlah_panen' => 125,
        ],
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '30/04/2025',
            'nama_bibit'    => 'Cabe Rawit',
            'jumlah_tanam' => 125,
            'jumlah_panen' => 125,
        ],
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '01/05/2025',
            'nama_bibit'    => 'Terong Hijau',
            'jumlah_tanam' => 125,
            'jumlah_panen' => 125,
        ],
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '01/05/2025',
            'nama_bibit'    => 'Sawi',
            'jumlah_tanam' => 125,
            'jumlah_panen' => 125,
        ],
    ];

    public function index(Request $request)
    {
        $username = session('username', 'Rekan Tani');
        $bibitData = $this->bibitData;
        return view('pengelolaan', compact('bibitData', 'username'));
    }
}
