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
            'ingredientes' => 'required|array'
        ],
        [
            'nombre.required' => 'El nombre es obligatorio.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número.',
            'ingredientes.array' => 'Los ingredientes no son válidos.',
            'ingredientes.required' => 'Los ingredientes no son válidos'
        ]);

         $pizza = Pizza::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'precio' => $request->precio,
        ]);

        $pizza->ingredientes()->attach($request->ingredientes);

        return redirect()->route('pizzas.showAllPizzas');
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'ingredientes' => 'array'
        ]);

        $pizza = Pizza::findOrFail($id);

        $pizza->update($request->only([
            'nombre',
            'descripcion',
            'precio'
        ]));

        $pizza->ingredientes()->sync(
            $request->ingredientes ?? []
        );

        return redirect()->route('pizzas.showAllPizzas');
    }

    public function edit($id){
        $pizza = Pizza::with('ingredientes')->findOrFail($id);
        $ingredientes = Ingrediente::all();
        return view('pizzas.edit', compact('pizza', 'ingredientes'));
    }

    public function confirmDelete(Pizza $pizza){
        return view('pizzas.confirmDelete', compact('pizza'));
    }

    public function destroy(Pizza $pizza){
        $pizza->delete();
        return redirect()
        ->route('pizzas.showAllPizzas')
        ->with('success', 'Pizza eliminada correctamente');
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