<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'username' => 
            // Str::random(10)
            'zhafran',
            'password' => bcrypt('123456'),
            'jenis' => 'admin',
            'bagian' => 'keuangan',
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time())
        //
        ]);
    }
}
