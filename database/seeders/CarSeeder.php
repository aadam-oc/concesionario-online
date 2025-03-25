<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coches')->insert([
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'año' => 2020,
                'precio' => 20000.00,
                'descripcion' => 'Sedán compacto, motor eficiente, ideal para ciudad.',
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'año' => 2019,
                'precio' => 22000.00,
                'descripcion' => 'Sedán deportivo, excelente rendimiento y confort.',
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Focus',
                'año' => 2021,
                'precio' => 25000.00,
                'descripcion' => 'Compacto y económico, ideal para jóvenes.',
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Cruze',
                'año' => 2020,
                'precio' => 21000.00,
                'descripcion' => 'Sedán con gran rendimiento y seguridad.',
            ],
            [
                'marca' => 'BMW',
                'modelo' => 'Serie 3',
                'año' => 2022,
                'precio' => 45000.00,
                'descripcion' => 'Deportivo, lujo y confort en cada detalle.',
            ],
            [
                'marca' => 'Mercedes-Benz',
                'modelo' => 'Clase C',
                'año' => 2021,
                'precio' => 47000.00,
                'descripcion' => 'Sedán de lujo con tecnología avanzada.',
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'A4',
                'año' => 2021,
                'precio' => 40000.00,
                'descripcion' => 'Tecnología innovadora y diseño elegante.',
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Golf',
                'año' => 2020,
                'precio' => 23000.00,
                'descripcion' => 'Compacto con buen rendimiento de combustible.',
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Altima',
                'año' => 2021,
                'precio' => 24000.00,
                'descripcion' => 'Sedán con excelente confort y tecnología.',
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Optima',
                'año' => 2020,
                'precio' => 22000.00,
                'descripcion' => 'Diseño moderno con buena eficiencia de combustible.',
            ],
        ]);
    }
}
