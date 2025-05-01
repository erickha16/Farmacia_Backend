<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void{
        /* 
        Modelo Eloquent
        Ventajas:
            - Más fácil de leer y entender.
            - Ejecuta created_at y updated_at automáticamente.
            - Dispara eventos (creating, created, etc.).
            - Ideal para seeders complejos.
        Desventajas:
            - Más lento (carga el modelo).
            - Necesitas definir el modelo y habilitar fillable o usar guarded = [] en dicho modelo.
        */
        User::create([
            'name' => 'user01',
            'last_name' => 'Perez',
            'email' => 'user01@example.com',
            'password' => bcrypt('user0001'), // Contraseña encriptada
            'id_rol' => 1, // ID del rol (admin)
            // Sin id_sucursal porque es un admin
        ]);

        User::create([
            'name' => 'user02',
            'last_name' => 'Gonzalez',
            'email' => 'user02@example.com',
            'password' => bcrypt('user0002'), // Contraseña encriptada
            'id_rol' => 2, // ID del rol (vendedor) 
            'id_sucursal' => 1, // ID de la sucursal a la que pertenece el usuario
        ]);
        
        User::create([
            'name' => 'user03',
            'last_name' => 'Lopez',
            'email' => 'user03@example.com',
            'password' => bcrypt('user0003'), // Contraseña encriptada
            'id_rol' => 2, // ID del rol (vendedor) 
            'id_sucursal' => 2, // ID de la sucursal a la que pertenece el usuario
        ]);

    }
}
