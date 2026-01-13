<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
   
Route::get('/', [PizzaController::class, 'showAllPizzas'])->name('pizza.showAllPizzas');
Route::get('/pizza/{id}', [PizzaController::class, 'showOnePizza'])->name('pizzas.showOnePizza');
