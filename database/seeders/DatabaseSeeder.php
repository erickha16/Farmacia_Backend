<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        $this->call([
            RolesTableSeeder::class,
            SucursalesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriasTableSeeder::class,
            // Add other seeders here
        ]);
    }
}
