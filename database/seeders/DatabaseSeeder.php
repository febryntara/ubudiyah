<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'name' => 'admin',
            'role_id' => 1 //siswa, otorisasi lom dibaut, sementara pake role siswa buat akses semua
        ]);
    }
}
