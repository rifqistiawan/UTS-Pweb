@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="page-head">
    <h1>Halo, {{ $username }}! 👋</h1>
    <p class="lead">Berikut ringkasan perpustakaan hari ini.</p>
</div>

<div class="grid grid-4" style="margin-bottom: 24px;">
    @foreach ($statistik as $item)
        @include('partials.stat-card', [
            'label' => $item['label'],
            'value' => $item['value'],
            'note'  => $item['note'],
        ])
    @endforeach
</div>

<div class="grid grid-2">
    <section class="card">
        <h2>Aktivitas Terbaru</h2>
        <ul class="timeline">
            @foreach ($aktivitas as $log)
                <li>
                    <time>{{ $log['waktu'] }}</time>
                    <span>{{ $log['teks'] }}</span>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="card">
        <h2>Akses Cepat</h2>
        <p class="lead" style="margin-bottom: 16px;">Lanjutkan pekerjaanmu dari sini.</p>
        <div style="display: grid; gap: 10px;">
            <a class="btn" href="{{ route('pengelolaan', ['username' => $username]) }}">Kelola Koleksi Buku</a>
            <a class="btn" style="background: var(--amber-500); color: var(--teal-900);"
               href="{{ route('profile', ['username' => $username]) }}">Lihat Profil</a>
        </div>
    </section>
</div>
@endsection
