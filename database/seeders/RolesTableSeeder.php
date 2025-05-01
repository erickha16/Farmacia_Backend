<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importar la clase DB para usar el Query Builder

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        /* 
        Query Builder de Laravel
        Ventajas:
            - Más rápido (no carga el modelo).
            - Útil cuando no necesitas eventos del modelo (como observers o timestamps automáticos).
            - Perfecto para seeders simples.

        Desventajas:
            - No ejecuta created_at ni updated_at automáticamente.
            - No dispara ningún evento (creating, created, etc.).
        */
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'vendedor'],
            //Add more roles as needed
        ]);
    }
}
