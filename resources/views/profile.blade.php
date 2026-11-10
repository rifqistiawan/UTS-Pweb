@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="page-head">
    <h1>Profil Anggota</h1>
    <p class="lead">Informasi akun yang sedang masuk.</p>
</div>

<div class="grid grid-2">
    <section class="card">
        <div class="profile-head">
            <div class="avatar">{{ strtoupper(substr($username, 0, 1)) }}</div>
            <div>
                <h2 style="margin-bottom: 2px;">{{ $username }}</h2>
                <span class="badge badge-ok">Aktif</span>
            </div>
        </div>

        <ul class="info-list">
            @foreach ($profil as $label => $nilai)
                <li>
                    <span>{{ $label }}</span>
                    <strong>{{ $nilai }}</strong>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="card">
        <h2>Minat Bacaan</h2>
        <div class="chips">
            @foreach ($minat as $item)
                <span class="chip">{{ $item }}</span>
            @endforeach
        </div>

        <a class="btn" style="margin-top: 22px;"
           href="{{ route('dashboard', ['username' => $username]) }}">Kembali ke Dashboard</a>
    </section>
</div>
@endsection
