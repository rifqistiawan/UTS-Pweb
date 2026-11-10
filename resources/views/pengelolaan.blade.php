@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="page-head">
    <h1>Pengelolaan Koleksi</h1>
    <p class="lead">{{ count($buku) }} judul buku tercatat, dikelola oleh {{ $username }}.</p>
</div>

<section class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($buku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $item['judul'] }}</strong></td>
                        <td>{{ $item['penulis'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                        <td>
                            @if ($item['status'] === 'Tersedia')
                                <span class="badge badge-ok">Tersedia</span>
                            @else
                                <span class="badge badge-out">{{ $item['status'] }}</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Belum ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
