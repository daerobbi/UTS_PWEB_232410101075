<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $users = [
        [
            'username' => 'suyanto',
            'email' => 'suyantomanja@gmail.com',
            'password' => 'suyanto123',
            'lokasi' => 'Ambulu, Jember, Jawa Timur, Indonesia',
            'tentang' => 'Saya seorang petani yang berfokus pada keberlanjutan pertanian dan pengembangan bibit unggul.',
            'bidang' => 'Pertanian Organik',
            'pengalaman' => '5 Tahun dalam pengelolaan tanaman pertanian',
            'spesialisasi' => 'Bibit Tanaman Pangan dan Hortikultura',
        ],
        [
            'username' => 'suyatman',
            'email' => 'suyatmanaja@gmail.com',
            'password' => 'suyatman123',
            'lokasi' => 'Maesan, Bondowoso, Jawa Timur, Indonesia',
            'tentang' => 'Saya petani sayuran yang fokus pada produksi organik dan distribusi lokal.',
            'bidang' => 'Pertanian Sayuran',
            'pengalaman' => '3 Tahun di industri pertanian',
            'spesialisasi' => 'Sayuran daun dan umbi-umbian',
        ],
    ];

    private $bibitData = [
        [
            'tanggal_tanam' => '22/04/2025',
            'tanggal_panen' => '30/04/2025',
            'nama_bibit'    => 'Cabe Rawit',
            'jumlah_tanam'  => 125,
            'jumlah_panen'  => 125,
        ],
        [
            'tanggal_tanam' => '01/05/2025',
            'tanggal_panen' => '10/05/2025',
            'nama_bibit'    => 'Tomat',
            'jumlah_tanam'  => 200,
            'jumlah_panen'  => 195,
        ],
        [
            'tanggal_tanam' => '05/05/2025',
            'tanggal_panen' => '15/05/2025',
            'nama_bibit'    => 'Terong',
            'jumlah_tanam'  => 150,
            'jumlah_panen'  => 145,
        ],
        [
            'tanggal_tanam' => '10/05/2025',
            'tanggal_panen' => '20/05/2025',
            'nama_bibit'    => 'Bayam',
            'jumlah_tanam'  => 300,
            'jumlah_panen'  => 290,
        ],
        [
            'tanggal_tanam' => '15/05/2025',
            'tanggal_panen' => '25/05/2025',
            'nama_bibit'    => 'Sawi',
            'jumlah_tanam'  => 180,
            'jumlah_panen'  => 175,
        ],
        [
            'tanggal_tanam' => '20/05/2025',
            'tanggal_panen' => '30/05/2025',
            'nama_bibit'    => 'Kangkung',
            'jumlah_tanam'  => 220,
            'jumlah_panen'  => 215,
        ],
        [
            'tanggal_tanam' => '25/05/2025',
            'tanggal_panen' => '04/06/2025',
            'nama_bibit'    => 'Wortel',
            'jumlah_tanam'  => 170,
            'jumlah_panen'  => 165,
        ],
        [
            'tanggal_tanam' => '30/05/2025',
            'tanggal_panen' => '09/06/2025',
            'nama_bibit'    => 'Bawang Merah',
            'jumlah_tanam'  => 250,
            'jumlah_panen'  => 245,
        ],
        [
            'tanggal_tanam' => '04/06/2025',
            'tanggal_panen' => '14/06/2025',
            'nama_bibit'    => 'Bawang Putih',
            'jumlah_tanam'  => 240,
            'jumlah_panen'  => 235,
        ],
        [
            'tanggal_tanam' => '09/06/2025',
            'tanggal_panen' => '19/06/2025',
            'nama_bibit'    => 'Timun',
            'jumlah_tanam'  => 190,
            'jumlah_panen'  => 185,
        ],
        [
            'tanggal_tanam' => '12/06/2025',
            'tanggal_panen' => '22/06/2025',
            'nama_bibit'    => 'Selada',
            'jumlah_tanam'  => 160,
            'jumlah_panen'  => 155,
        ],
        [
            'tanggal_tanam' => '15/06/2025',
            'tanggal_panen' => '25/06/2025',
            'nama_bibit'    => 'Paprika',
            'jumlah_tanam'  => 140,
            'jumlah_panen'  => 135,
        ],
        [
            'tanggal_tanam' => '18/06/2025',
            'tanggal_panen' => '28/06/2025',
            'nama_bibit'    => 'Mentimun',
            'jumlah_tanam'  => 210,
            'jumlah_panen'  => 205,
        ],
        [
            'tanggal_tanam' => '21/06/2025',
            'tanggal_panen' => '01/07/2025',
            'nama_bibit'    => 'Jagung Manis',
            'jumlah_tanam'  => 300,
            'jumlah_panen'  => 295,
        ],
        [
            'tanggal_tanam' => '24/06/2025',
            'tanggal_panen' => '04/07/2025',
            'nama_bibit'    => 'Kacang Panjang',
            'jumlah_tanam'  => 180,
            'jumlah_panen'  => 175,
        ],
    ];

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return redirect()->route('dashboard', ['username' => $user['username']])->with('success', 'Login berhasil!');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Rekan Tani');

        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Rekan Tani');
        $bibitData = $this->bibitData;
        return view('pengelolaan', compact('bibitData', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $user = collect($this->users)->firstWhere('username', $username);
        return view('profile', compact('user','username'));
    }

    public function logout()
    {
        return redirect()->route('login')->with('success', 'Anda berhasil logout.');
    }
}
