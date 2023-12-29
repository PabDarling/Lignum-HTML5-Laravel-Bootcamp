<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Detalles del Actor</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $actor->nombre }}</h5>
                    <p class="card-text">Año de Nacimiento: {{ $actor->ano_nacimiento }}</p>
                    <a href="{{ route('actors.edit', $actor->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('actors.destroy', $actor->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
