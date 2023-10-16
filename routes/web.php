<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get("/mahasiswa/{nama}", function($nama = "Verrino") {
    echo "<h1>Halo nama Saya $nama</h2>";
});

Route::get("/mahasiswa2/{nama?}", function($nama = "Verrino") {
    echo "<h1>Halo nama Saya $nama</h2>";
});

Route::get('/profile/{nama?}/{pekerjaan?}', function ($nama = "Verrino", $pekerjaan = "developer") {
    echo "<h1>Halo nama saya $nama. Saya adalah $pekerjaan</h2>";
});

Route::get("/hubungi", function() {
    echo "<h1>Hubungi Kami</h1>";
})->name("call");

Route::redirect("/contact", "/hubungi");

Route::get("/halo", function() {
    echo "<a href='". route('call') . "'>" . route('call'). "</a>";
});

// Route::prefix("/dosen")->group(function() {
//     Route::get("/jadwal", function() {
//         echo "<h1>Jadwal Dosen</h1>";
//     });
//     Route::get("/materi", function() {
//         echo "<h1>Materi Perkuliahan</h1>";
//     });
// });

Route::get('/dosen', function() {
    return view('dosen');
});

Route::get('/dosen/index', function() {
    return view('dosen.index');
});

Route::get('/fakultas', function() {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);
    $kampus = "Universitas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('fakultas', 'kampus'));
});