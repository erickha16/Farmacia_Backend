<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importar la clase DB para usar el Query Builder

class CategoriasTableSeeder extends Seeder
{
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
        DB::table('categorias')->insert([
            ['name' => 'Medicamentos'],
            ['name' => 'Suplementos'],
            ['name' => 'Cuidado Personal'],
            ['name' => 'Productos Naturales'],
            ['name' => 'Higiene'],
            ['name' => 'Cuidado Infantil'],
            ['name' => 'Cuidado Dental'],
            ['name' => 'Cuidado de la Salud Sexual'],
            ['name' => 'Cuidado de la Salud Mental'],
            ['name' => 'Cuidado de la Salud Digestiva'],
            ['name' => 'Dulces y Snacks'],
            ['name' => 'Bebidas'],
            //['name' => ''],
     
            //Add more categories as needed
        ]);
    }
}
