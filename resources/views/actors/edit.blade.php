<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Editar Actor</h2>
            <form action="{{ route('actors.update', $actor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $actor->nombre }}">
                </div>
                <div class="form-group">
                    <label for="ano_nacimiento">Año de Nacimiento:</label>
                    <input type="number" name="ano_nacimiento" class="form-control" id="ano_nacimiento" value="{{ $actor->ano_nacimiento }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
</div>
