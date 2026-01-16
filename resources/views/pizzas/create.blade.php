@extends('layouts.app')

@section('content')

<h1>Nueva pizza</h1>

@if ($errors->any())
    <div style="color:red">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('pizzas.store')}}">
    @csrf 

    <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">

    <textarea name="descripcion">{{old('descripcion')}}</textarea>

    <input type="number" step="0.01" name="precio" value="{{ old('precio') }}">

    <h3>Ingredientes</h3>
    @foreach($ingredientes as $ingrediente)
        <label>
            <input type="checkbox" name="ingredientes[]" value="{{($ingrediente->id)}}" {{in_array($ingrediente->id, old('ingredientes', [])) ? 'checked' : ''}}>
            {{ $ingrediente->nombre }}
        </label>
    @endforeach

    <button type="submit">Crear Pizza</button>
</form>

@endsection