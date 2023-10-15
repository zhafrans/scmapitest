<?php

namespace Database\Seeders;

use App\Models\Sales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sales::create([
            'id_cabang' => 3,
            'nama' => 'Bramasta',
            'email' => 'bramasta@gmail.com',
            'password' => bcrypt('123456'),
            'status' => 'aktif',
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time())
        //
        ]);
    }
}
