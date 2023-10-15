<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warehouse::create([
            'nama'     => 'warehouse SEMARANG',
            'alamat' => 'Semarang Timur',
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time())

        ]);
    }
}
