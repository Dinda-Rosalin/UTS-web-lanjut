<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftar_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_barang')->insert([
            ['nama_barang' => 'Mie Ayam', 'harga_barang' => 10000, 'photo' => '1.jpeg'],
            ['nama_barang' => 'Mie Pangsit', 'harga_barang' => 12000, 'photo' => '2.jpg'],
            ['nama_barang' => 'Mie Goreng', 'harga_barang' => 15000, 'photo' => '3.jpg'],
            ['nama_barang' => 'Mie Kuah', 'harga_barang' => 17000, 'photo' => '4.jpg'],
            ['nama_barang' => 'Mie Geprek', 'harga_barang' => 16000, 'photo' => '5.jpg'],
            ['nama_barang' => 'Mie Telur', 'harga_barang' => 18000, 'photo' => '6.jpg'],
            ['nama_barang' => 'Mie Nyemek', 'harga_barang' => 13000, 'photo' => '7.jpg'],
        ]);
    }
}
