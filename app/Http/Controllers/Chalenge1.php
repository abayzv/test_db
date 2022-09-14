<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Chalenge1 extends Controller
{
    public function index()
    {
        return view('chalenge1');
    }
    public function chalenge1_4()
    {
        $data =  DB::table("product_histories")
            ->selectRaw('max(kode) as kode, nama, sum(harga) as total_harga, count(nama) as total_barang, if(count(nama) > 1, "Penambahan","Baru") as status')
            ->groupBy('nama')
            ->get();

        return json_encode($data);
    }
}
