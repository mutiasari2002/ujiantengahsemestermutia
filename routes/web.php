<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('produk', function () {
    $kodeproduk = ['BRG001', 'BRG002'];
    $namaproduk = ['Buku', 'Pena'];
    $jenisproduk = ['Alat Tulis', 'Alat Tulis'];
    $harga = [20000, 15000];
    $jumlah = count($kodeproduk);
    return view('produk', compact('kodeproduk', 'namaproduk', 'jenisproduk', 'harga', 'jumlah'));
});
