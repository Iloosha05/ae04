<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', [PizzaController::class, 'showAllPizzas'])->name('pizza.showAllPizzas');
Route::get('/pizza/{id}', [PizzaController::class, 'showOnePizza'])->name('pizzas.showOnePizza');

Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::post('/pizza', [PizzaController::class, 'store'])->name('pizzas.store');

Route::get('/pizza/{id}/edit', [PizzaController::class, 'edit'])->name('pizzas.edit');
Route::put('/pizza/{id}', [PizzaController::class, 'update'])->name('pizzas.update');



