<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'min:3', 'max:30'],
            'password' => ['required', 'string', 'min:4'],
        ], [
            'username.required' => 'Username wajib diisi.',
            'username.min'      => 'Username minimal 3 karakter.',
            'password.required' => 'Password wajib diisi.',
            'password.min'      => 'Password minimal 4 karakter.',
        ]);

        return redirect()->route('dashboard', ['username' => $validated['username']]);
    }

    public function dashboard(Request $request): View|RedirectResponse
    {
        $username = $this->resolveUsername($request);
        if ($username === null) {
            return redirect()->route('login');
        }

        $buku = $this->daftarBuku();

        $statistik = [
            [
                'label' => 'Judul Buku',
                'value' => count($buku),
                'note'  => 'Terdaftar di katalog',
            ],
            [
                'label' => 'Total Eksemplar',
                'value' => array_sum(array_column($buku, 'stok')),
                'note'  => 'Siap dipinjam',
            ],
            [
                'label' => 'Sedang Dipinjam',
                'value' => count(array_filter($buku, fn ($b) => $b['status'] === 'Dipinjam')),
                'note'  => 'Judul yang keluar',
            ],
            [
                'label' => 'Stok Habis',
                'value' => count(array_filter($buku, fn ($b) => $b['stok'] === 0)),
                'note'  => 'Perlu diadakan lagi',
            ],
        ];

        $aktivitas = [
            ['waktu' => '08.15', 'teks' => 'Laskar Pelangi dikembalikan oleh Dinda'],
            ['waktu' => '09.40', 'teks' => 'Bumi Manusia dipinjam oleh Raka'],
            ['waktu' => '10.05', 'teks' => 'Anggota baru bergabung: Salsa'],
            ['waktu' => '11.30', 'teks' => 'Laut Bercerita ditambahkan ke katalog'],
        ];

        return view('dashboard', [
            'username'  => $username,
            'statistik' => $statistik,
            'aktivitas' => $aktivitas,
        ]);
    }

    public function pengelolaan(Request $request): View|RedirectResponse
    {
        $username = $this->resolveUsername($request);
        if ($username === null) {
            return redirect()->route('login');
        }

        return view('pengelolaan', [
            'username' => $username,
            'buku'     => $this->daftarBuku(),
        ]);
    }

    public function profile(Request $request): View|RedirectResponse
    {
        $username = $this->resolveUsername($request);
        if ($username === null) {
            return redirect()->route('login');
        }

        $profil = [
            'Peran'       => 'Anggota Perpustakaan',
            'Email'       => strtolower($username) . '@gmail.com',
            'Bergabung'   => 'November 2026',
            'Buku Dibaca' => '12 judul',
        ];

        $minat = ['Pengembangan', 'Novel Sastra', 'Sejarah'];

        return view('profile', [
            'username' => $username,
            'profil'   => $profil,
            'minat'    => $minat,
        ]);
    }

    private function resolveUsername(Request $request): ?string
    {
        $username = trim((string) $request->query('username', ''));

        return $username === '' ? null : $username;
    }

    private function daftarBuku(): array
    {
        return [
            ['judul' => 'Laskar Pelangi',                  'penulis' => 'Andrea Hirata',        'kategori' => 'Novel',        'stok' => 4, 'status' => 'Tersedia'],
            ['judul' => 'Bumi Manusia',                    'penulis' => 'Pramoedya Ananta Toer', 'kategori' => 'Sastra',       'stok' => 0, 'status' => 'Dipinjam'],
            ['judul' => 'Laut Bercerita',                  'penulis' => 'Leila S. Chudori',     'kategori' => 'Sastra',       'stok' => 6, 'status' => 'Tersedia'],
            ['judul' => 'Sapiens',                         'penulis' => 'Yuval Noah Harari',    'kategori' => 'Sejarah',      'stok' => 2, 'status' => 'Tersedia'],
            ['judul' => 'Atomic Habits',                   'penulis' => 'James Clear',          'kategori' => 'Pengembangan', 'stok' => 0, 'status' => 'Dipinjam'],
            ['judul' => '5cm',                             'penulis' => 'Donny Dhirgantoro',    'kategori' => 'Sastra',       'stok' => 3, 'status' => 'Tersedia'],
        ];
    }
}
