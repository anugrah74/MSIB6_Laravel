<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisProdukController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('front.home');
});

//contoh routing untuk mengarahkan ke view , tanpa melalui controler
Route::get('/hello', function () {
    return view('hello');
});

// contoh routing untuk mengarahkan ke dirinya sendiri , tanpa view ataupun  controler
Route::get('/salam', function () {
    return "<h1>`Selamat Pagi Peserta MSIB</h1>";
});
Route::get('/staff/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama pegawai'. $nama .'<br>Departemen: ' .$divisi;
});

Route::get('/daftar_nilai', function () {
    // return view yang mengarahkan ke dalam view yang didalam nya ada folder nilai dan file daftar_nilai
    return view ('nilai.daftar_nilai');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


// route memanggil setiap controller setiap  fungsi
route::prefix('admin')->group(function(){
    // route memanggil controller setiap fungsi,
    // (nanti lingnya menggunkan url, ada didalam view)
Route::get('/jenis_produk', [JenisProdukController::class,'index']);
});

