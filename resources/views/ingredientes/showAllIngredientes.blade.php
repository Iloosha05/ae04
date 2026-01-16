@extends('layouts.app')

@section('content')

@if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

<table>
    <tr>
        <th>Ingrediente</th>
    </tr>
    @foreach ($ingredientes as $ingrediente)
    <tr>
        <td><a href="{{ route('ingredientes.showOneIngrediente', $ingrediente->id) }}">{{ $ingrediente->nombre }}</a></td>
        <td><a href="{{ route('ingredientes.edit', $ingrediente->id) }}">Editar</a></td>
        <td><a href="{{ route('ingredientes.confirmDestroy', $ingrediente->id) }}">Eliminar</a></td>
    </tr>
    @endforeach
</table>

@endsection