<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    public function run(): void
    {
        Pizza::create([
            'nombre' => 'Pizza Mozzarella',
            'descripcion' => 'Clásica pizza con queso mozzarella',
            'precio' => 5.99
        ]);

        Pizza::create([
            'nombre' => 'Pizza Parmesano',
            'descripcion' => 'Pizza con queso parmesano',
            'precio' => 6.49
        ]);

        Pizza::create([
            'nombre' => 'Pizza Gorgonzola',
            'descripcion' => 'Pizza con queso gorgonzola',
            'precio' => 6.99
        ]);

        Pizza::create([
            'nombre' => 'Pizza Provolone',
            'descripcion' => 'Pizza con queso provolone',
            'precio' => 7.49
        ]);

        Pizza::create([
            'nombre' => 'Pizza Tomate',
            'descripcion' => 'Pizza con base de tomate fresco',
            'precio' => 5.49
        ]);
    }
}

