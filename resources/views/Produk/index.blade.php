@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <h1>Daftar Produk</h1>
    
    @if(count($Produk) > 0)
        <ul style="line-height: 1.8;">
            @foreach($Produk as $p)
                <li><a href="/produk/{{ $p['Id_Produk'] }}">{{ $p['Nama'] }}</a></li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada produk.</p>
    @endif
    
    <a href="/produk/create" style="display: inline-block; margin-top: 20px;">+ Tambah Produk</a>
    <br><br>
    
@endsection