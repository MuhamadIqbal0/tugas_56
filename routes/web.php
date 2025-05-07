<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Route::get('/home2', [HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostController::class);
// //1
// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return "Nama Mahasiswa : ". $nama;
// });
// //2
// Route::get('/Barang/{nama}/{harga}', function ($nama,$harga) {
//     return "Nama Barang : $nama harga:". $harga;
// });
// //3
// Route::get('/kelas/{kelas?}', function ($kelas = 'TI-SI') {
//     return "Kelas : $kelas";
// });
// //4
// Route::get('/nama/{nama}', function ($nama) {
//     return "Nama : $nama";
// })-> where('nama', '[A-Za-z]+');
// //5
// Route::get('/user/{id}', function ($id) {
//     return "ID user: $id";
// })->where('id', '^[a-zA-Z]{2}[0-9]+$');