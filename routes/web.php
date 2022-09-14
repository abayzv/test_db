<?php

use App\Http\Controllers\Chalenge1;
use App\Http\Controllers\Chalenge2;
use Illuminate\Support\Facades\DB;
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

Route::get('/challenge1/5', [Chalenge1::class, 'index']);
Route::get('/challenge1/4', [Chalenge1::class, 'chalenge1_4']);
Route::get('/challenge2/2', [Chalenge2::class, 'chalenge2_2']);
Route::get('/challenge2/3', [Chalenge2::class, 'chalenge2_3']);

Route::get('/data', function () {
    $data =  DB::table("product_histories")
        ->selectRaw('max(kode) as kode, nama, sum(harga) as total_harga, count(nama) as total_barang, if(count(nama) > 1, "Penambahan","Baru") as status')
        ->groupBy('nama')
        ->get();

    return json_encode($data);
});
