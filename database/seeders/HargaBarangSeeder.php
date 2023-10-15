<?php

namespace Database\Seeders;

use App\Models\HargaBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HargaBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HargaBarang::create([
            'id_barang' => 3,
            'tanggal' => date('Y-m-d', time()),
            'id_jenis_outlet' => 3,
            'harga' => 120500,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time())
        //
        ]);
    }
}
