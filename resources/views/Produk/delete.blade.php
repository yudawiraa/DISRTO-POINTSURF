@extends('layouts.app')

@section('title', 'Konfirmasi Hapus Produk')

@section('content')
    <h1>Yakin ingin menghapus Produk ini?</h1>
    
    <div style="margin-bottom: 20px;">
        <p>Nama Produk : <strong>{{ $Produk['Nama'] }}</strong></p>
    </div>
    
    <button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
    <a href="/produk/{{ $Produk['Id_Produk'] }}">Batal</a>
@endsection