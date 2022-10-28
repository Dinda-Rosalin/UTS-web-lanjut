<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class review_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_barang')->insert([
            ['id_barang' => 1, 'review' => 'Mie nya Sangat Enak', 'barang_terjual' => 5],
            ['id_barang' => 2, 'review' => 'bakal ketagihan nichh', 'barang_terjual' => 4],
            ['id_barang' => 3, 'review' => 'mantap banget besok order banyak', 'barang_terjual' => 6],
            ['id_barang' => 4, 'review' => 'Mie nya banyak sekali cukup mengenyangkan', 'barang_terjual' => 8],
            ['id_barang' => 5, 'review' => 'auto bintang 10, pesenan cepet diantar', 'barang_terjual' => 7],
            ['id_barang' => 6, 'review' => 'good', 'barang_terjual' => 2],
            ['id_barang' => 1, 'review' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit', 'barang_terjual' => 8],
            ['id_barang' => 2, 'review' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit', 'barang_terjual' => 7],
            ['id_barang' => 3, 'review' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit', 'barang_terjual' => 2],
        ]);
    }
}
