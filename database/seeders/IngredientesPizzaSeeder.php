<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;
use App\Models\Ingrediente;

class IngredientesPizzaSeeder extends Seeder
{
    public function run(): void
    {
        $mozzarella = Ingrediente::where('nombre', 'Mozzarella')->first();
        $parmesano = Ingrediente::where('nombre', 'Parmesano')->first();
        $gorgonzola = Ingrediente::where('nombre', 'Gorgonzola')->first();
        $provolone = Ingrediente::where('nombre', 'Provolone')->first();
        $tomate = Ingrediente::where('nombre', 'Tomate')->first();

        Pizza::where('nombre', 'Pizza Mozzarella')->first()->ingredientes()->attach([$mozzarella->id, $tomate->id]);
        Pizza::where('nombre', 'Pizza Parmesano')->first()->ingredientes()->attach([$parmesano->id]);
        Pizza::where('nombre', 'Pizza Gorgonzola')->first()->ingredientes()->attach([$gorgonzola->id]);
        Pizza::where('nombre', 'Pizza Provolone')->first()->ingredientes()->attach([$provolone->id]);
        Pizza::where('nombre', 'Pizza Tomate')->first()->ingredientes()->attach([$tomate->id]);
    }
}



