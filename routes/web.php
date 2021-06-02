<?php

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



////////////////////////////////////////LOGIN PETUGAS
Route::get('/login_petugas', function () {
    return view('login_petugas');
});

Route::post('login_petugas/cek', 'App\Http\Controllers\login_petugas@cek');
Route::get('/petugas','App\Http\Controllers\Dashboard_petugas@index');
Route::get('/logout_petugas','App\Http\Controllers\login_petugas@logout');

////////////////////////////////////////PETUGAS
Route::get('/login_petugas2',"Petugas@index_petugas");
Route::get('/data_petugas',"App\Http\Controllers\Petugas@index");

Route::get('/petugas/edit/{id}',"App\Http\Controllers\Petugas@edit");

Route::post('/petugas/update',"App\Http\Controllers\Petugas@update")-> name('petugas.update');

Route::get('/petugas_create',"App\Http\Controllers\Petugas@create");

Route::post('/petugas/create',"App\Http\Controllers\Petugas@create");

Route::post('/petugas/store',"App\Http\Controllers\Petugas@store") ->name('petugas.store');

Route::post('/petugas/store_2',"App\Http\Controllers\Petugas@store_2") ->name('petugas.store_2');

Route::get('/petugas/hapus/{id}',"App\Http\Controllers\Petugas@hapus");

Route::get('/petugas/detail/{id}', 'App\Http\Controllers\Petugas@detail');

Route::get('/petugas/cetak_pdf', 'App\Http\Controllers\Petugas@cetak_pdf');

////////////////////////////////////////LOGIN MASYARAKAT
Route::get('/login_masyarakat', function () {
    return view('login_masyarakat');
});

Route::post('login_masyarakat/cek','App\Http\Controllers\login_masyarakat@cek');
Route::get('/masyarakat','App\Http\Controllers\Dashboard_masyarakat@index_masyarakat');
Route::get('/logout_masyarakat','App\Http\Controllers\login_masyarakat@logout');

////////////////////////////////////////MASYARAKAT
Route::get('/login_masyarakat2',"App\Http\Controllers\Masyarakat@index_masyarakat");
Route::get('/data_masyarakat',"App\Http\Controllers\Masyarakat@index");

Route::get('/masyarakat/edit/{id}',"App\Http\Controllers\Masyarakat@edit");

Route::post('/masyarakat/update',"App\Http\Controllers\Masyarakat@update")-> name('masyarakat.update');

Route::get('/masyarakat_create',"App\Http\Controllers\Masyarakat@create");

Route::post('/masyarakat/create',"App\Http\Controllers\Masyarakat@create");

Route::post('/masyarakat/store',"App\Http\Controllers\Masyarakat@store") ->name('masyarakat.store');

Route::get('/masyarakat/hapus/{id}',"App\Http\Controllers\Masyarakat@hapus");

Route::get('/masyarakat/detail/{id}', 'App\Http\Controllers\Masyarakat@detail');

Route::get('/masyarakat/cetak_pdf', 'App\Http\Controllers\Masyarakat@cetak_pdf');

////////////////////////////////////////PENGADUAN MASYARAKAT
Route::get('/pengaduan_masyarakat',"App\Http\Controllers\Pengaduan@index1");

Route::get('/tanggapan_masyarakat',"App\Http\Controllers\Pengaduan@index2");

Route::get('/pengaduan/edit/{id}',"App\Http\Controllers\Pengaduan@edit");

Route::post('/pengaduan/update',"App\Http\Controllers\Pengaduan@update")-> name('pengaduan.update');

Route::get('/pengaduan_create',"App\Http\Controllers\Pengaduan@create");

Route::post('/pengaduan/create',"App\Http\Controllers\Pengaduan@create");

Route::post('/pengaduan/store',"App\Http\Controllers\Pengaduan@store")->name('pengaduan.store');

Route::get('/pengaduan/hapus/{id}',"App\Http\Controllers\Pengaduan@hapus");

Route::get('/pengaduan/detail/{id}', 'App\Http\Controllers\Pengaduan@detail');

Route::get('/pengaduan/cetak_pdf', 'PApp\Http\Controllers\engaduan@cetak_pdf');

////////////////////////////////////////PENGADUAN ADMIN
Route::get('/pengaduan_admin',"App\Http\Controllers\Pengaduan_Admin@index");

Route::get('/pengaduan_admin/edit/{id}',"App\Http\Controllers\Pengaduan_Admin@edit");

Route::post('/pengaduan_admin/update',"App\Http\Controllers\Pengaduan_Admin@update")-> name('pengaduan_admin.update');

Route::get('/pengaduan_create_admin',"App\Http\Controllers\Pengaduan_Admin@create");

Route::post('/pengaduan/create',"App\Http\Controllers\Pengaduan_Admin@create");

Route::post('/pengaduan/store_admin',"App\Http\Controllers\Pengaduan_Admin@store") ->name('pengaduan.store');

Route::get('/pengaduan_admin/hapus/{id}',"App\Http\Controllers\Pengaduan_Admin@hapus");

Route::get('/pengaduan_admin/detail/{id}', 'App\Http\Controllers\Pengaduan_Admin@detail');

Route::get('/pengaduan/cetak_pdf', 'App\Http\Controllers\Pengaduan_Admin@cetak_pdf');

////////////////////////////////////////TANGGAPAN
Route::get('/tanggapan_create', function () {
    return view('tanggapan_create');
});
Route::post('/tambah_tanggapan/store/{id_pengaduan}',"App\Http\Controllers\Tanggapan@store") ->name('masyarakat.store');

Route::get('/tanggapan_admin',"App\Http\Controllers\Tanggapan@index");

////////////////////////////////////////CETAK
Route::get('/pengaduan/cetak_pdf', 'App\Http\Controllers\Pengaduan_Admin@cetak_pdf');



