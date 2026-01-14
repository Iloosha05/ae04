<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Ingrediente;


class PizzaController extends Controller
{
    public function create(){
        $ingredientes = Ingrediente::all();
        return view('pizzas.create', compact('ingredientes'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'ingredientes' => 'array'
        ],
        [
            'nombre.required' => 'El nombre es obligatorio.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número.',
            'ingredientes.array' => 'Los ingredientes no son válidos.',
        ]
        );
    }

    public function showAllPizzas(){
        $pizzas = Pizza::all();
        $pizzas = Pizza::with("ingredientes")->get();
        return view('pizzas.showAllPizzas', compact('pizzas'));
    }

    public function showOnePizza($id){
        $pizza = Pizza::with('ingredientes')->findOrFail($id);
        return view('pizzas.showOnePizza', compact('pizza'));
    }
}
