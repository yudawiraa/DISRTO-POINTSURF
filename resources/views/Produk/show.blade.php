@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <h1>Detail Produk</h1>
    
    <div style="line-height: 1.8; margin-bottom: 20px;">
        <p><strong>Nama:</strong> {{ $Produk['Nama'] }}</p>
        <p><strong>Harga:</strong> {{ $Produk['Harga'] }}</p>
        <p><strong>Kategori:</strong> {{ $Produk['Kategori'] }}</p>
    </div>
    
    <a href="/produk/{{ $Produk['Id_Produk'] }}/edit" style="margin-right: 10px;">✏️ Edit</a>
    <a href="/produk/{{ $Produk['Id_Produk'] }}/delete" style="margin-right: 10px;">🗑️ Hapus</a>
    <a href="/produk">← Kembali ke daftar</a>
@endsection