<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cabang::create([
            'id_warehouse'      => '3',
            'nama'     => 'cabang ZH cilacap',
            'alamat' => 'cilacap',
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time())

        ]);
    }
}
