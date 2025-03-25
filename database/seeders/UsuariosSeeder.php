<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Adam',
                'email' => 'Adam@gmail.com',
                'password' => Hash::make('Adam'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
