<h1>Editar pizza<h1>

@if ($errors->any())
    <div style="color:red">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('pizzas.update', $pizza->id) }}">
    @csrf
    @method('PUT') 

    <input type="text" name="nombre" value="{{ $pizza->nombre }}">

    <textarea name="descripcion">{{ $pizza->descripcion }}</textarea>

    <input type="number" step="0.01" name="precio" value="{{ $pizza->precio }}">

    <h3>Ingredientes</h3>
    @foreach($ingredientes as $ingrediente)
        <label>
            <input type="checkbox" name="ingredientes[]" value="{{($ingrediente->id)}}" {{in_array($ingrediente->id, old('ingredientes', [])) ? 'checked' : ''}}>
            {{ $ingrediente->nombre }}
        </label>
    @endforeach

    <button type="submit">Actualizar</button>
</form>