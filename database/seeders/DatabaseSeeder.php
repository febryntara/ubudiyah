<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
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
            'role_id' => 4
        ]);

        UserRole::create([
            'name' => 'siswa'
        ]);
        UserRole::create([
            'name' => 'guru'
        ]);
        UserRole::create([
            'name' => 'umum'
        ]);

        for ($i = 1; $i < 10; $i++) {
            User::create([
                'email' => 'email' . mt_rand($i + $i, $i * $i + 1) . '@gmail.com',
                'password' => Hash::make('password'),
                'name' => 'admin' . $i,
                'role_id' => 2 //guru, otorisasi lom dibaut, sementara pake role siswa buat akses semua
            ]);
        }
    }
}
