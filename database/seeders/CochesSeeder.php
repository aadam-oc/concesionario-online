<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CochesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coches')->insert([
            [
                'marca' => 'Toyota',
                'modelo' => 'Supra',
                'año' => 1998,
                'precio' => 45000,
                'descripcion' => 'Un clásico JDM con motor 2JZ.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Skyline R34',
                'año' => 1999,
                'precio' => 70000,
                'descripcion' => 'Ícono del automovilismo japonés.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic Type R',
                'año' => 2021,
                'precio' => 38000,
                'descripcion' => 'Deportivo compacto con gran rendimiento.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'RX-7',
                'año' => 1995,
                'precio' => 50000,
                'descripcion' => 'Motor rotativo legendario.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
