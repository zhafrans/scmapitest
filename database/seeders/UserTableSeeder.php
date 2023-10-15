<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //create data user
         User::create([
            'name'      => 'Zhafran',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('password'),
            'role' => 'Admin',
            'alamat' => 'Purwokerto',
            'phone' => '08892382391132'

        ]);
    }
}
