@extends('layouts.app')

@section('content')

<h1>Confirmar eliminación</h1>

<p>
    ¿Estás seguro de que deseas eliminar la pizza 
    <strong>{{ $pizza->nombre }}</strong>?
</p>

<form method="POST" action="{{ route('pizzas.destroy', $pizza->id) }}">
    @csrf
    @method('DELETE')

    <button type="submit">Sí, eliminar</button>
    <a href="{{ route('pizzas.showAllPizzas') }}">Cancelar</a>
</form>

@endsection

