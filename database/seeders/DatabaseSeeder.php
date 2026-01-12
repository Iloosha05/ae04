<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            IngredienteSeeder::class,
            PizzaSeeder::class,
            IngredientesPizzaSeeder::class,
        ]);
    }
}

