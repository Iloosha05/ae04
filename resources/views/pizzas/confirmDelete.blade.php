<h1>Confirmar eliminación</h1>

<p>¿Estás seguro de que quieres eliminar la pizza "{{ $pizza->nombre }}"?</p>

<form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Sí, eliminar</button>
</form>

<a href="{{ route('pizzas.showAllPizzas') }}">Cancelar</a>
