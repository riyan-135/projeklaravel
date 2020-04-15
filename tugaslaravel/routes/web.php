<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::prefix('/importir')->group(function(){
    Route::get('/pengembang', function(){
        $pekerja = ['Siska', 'Web Developer', 'jl Mawar', '0857438298'];
        $pekerja2 = ['Sisi', 'Android Developer', 'jl H Soleh', '085744643'];
        $pekerja3 = ['Andini', 'Mobile Developer', 'jl H Nawi', '08574375849'];
        return view('pengembang', compact('pekerja', 'pekerja2', 'pekerja3'));
    });
    Route::get('/marketing', function(){
        $pegawai = ['Rizki', 'Digital Marketing', 'Jl Kebayoran', '089675846'];
        $pegawai2 = ['Abdul', 'Digital Marketing', 'Jl Angsana', '089673456'];
        $pegawai3 = ['Rizki', 'Digital Marketing', 'Jl Anggrek', '089673467'];
        return view('digitalmarketing', compact('pegawai', 'pegawai2', 'pegawai3'));
    });
    Route::get('/desain', function(){
        $karyawan = ['Adi Nuryadi', 'Web Desain', 'Jl Cempaka Putih', '081256748'];
        $karyawan2 = ['ucup', 'Desain Grafis', 'Jl Kenanga', '08159834854'];
        $karyawan3 = ['Adi ', 'Web Desain', 'Jl Kemanggisan', '0815093949'];
        return view('divisidesain', compact('karyawan', 'karyawan2', 'karyawan3'));
    });
    
});
