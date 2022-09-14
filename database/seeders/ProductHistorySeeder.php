<?php

namespace Database\Seeders;

use App\Models\product_history;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product_history::create([
            'kode' => 'INV-1',
            'nama' => 'Kursi Siswa',
            'harga' => 200000
        ]);
        product_history::create([
            'kode' => 'INV-2',
            'nama' => 'Meja Siswa',
            'harga' => 220000
        ]);
        product_history::create([
            'kode' => 'INV-3',
            'nama' => 'Komputer',
            'harga' => 10220000
        ]);
        product_history::create([
            'kode' => 'INV-4',
            'nama' => 'Asbak',
            'harga' => 10000
        ]);
        product_history::create([
            'kode' => 'INV-5',
            'nama' => 'Komputer',
            'harga' => 10220000
        ]);
        product_history::create([
            'kode' => 'INV-6',
            'nama' => 'Asbak',
            'harga' => 10220000
        ]);
        product_history::create([
            'kode' => 'INV-7',
            'nama' => 'Komputer',
            'harga' => 10220000
        ]);
        product_history::create([
            'kode' => 'INV-8',
            'nama' => 'Komputer',
            'harga' => 10220090
        ]);
    }
}
