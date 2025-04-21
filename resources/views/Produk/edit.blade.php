@extends('layouts.app')

@section('title', 'Edit Data Produk')

@section('content')
    <h1>Edit Data Produk</h1>
    
    <form style="line-height: 2;">
        <label>Nama: <input type="text" value="{{ $Produk['Nama'] }}"></label><br>
        <label>Harga: <input type="number" value="{{ $Produk['Harga'] }}"></label><br>
        <label>Kategori: <input type="email" value="{{ $Produk['Kategori'] }}"></label><br>
        <button disabled style="margin-top: 10px;">Simpan (dummy)</button>
    </form>
    
    <a href="/produk/{{ $Produk['Id_Produk'] }}" style="display: inline-block; margin-top: 20px;">← Kembali ke detail</a>
@endsection