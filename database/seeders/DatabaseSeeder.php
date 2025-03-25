<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    // Llama al CarSeeder para insertar los coches
    $this->call(CochesSeeder::class);
    // Llama al UserSeeder para insertar los usuarios
    $this->call(UsuariosSeeder::class);
}

}
