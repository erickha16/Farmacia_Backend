<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importar la clase DB para usar el Query Builder

class SucursalesTableSeeder extends Seeder
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
        DB::table('sucursales')->insert([
            ['name' => 'Sucursal Centro', 'address' => 'Carrillo Puerto No.34', 'phone' => '123456789'],
            ['name' => 'Sucursal Araucarias', 'address' => 'Av. Araucarias No.343', 'phone' => '987654321'],
            // Add more sucursales as needed
        ]);
    }
}
