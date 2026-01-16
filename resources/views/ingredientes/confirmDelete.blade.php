@extends('layouts.app')

@section('content')

<h1>Confirmar eliminación</h1>

<p>
    ¿Estás seguro de que deseas eliminar el ingrediente
    <strong>{{ $ingrediente->nombre }}</strong>?
</p>

<form method="POST" action="{{ route('ingredientes.destroy', $ingrediente->id) }}">
    @csrf
    @method('DELETE')

    <button type="submit">Sí, eliminar</button>
    <a href="{{ route('ingredientes.showAllIngredientes') }}">Cancelar</a>
</form>

@endsection

