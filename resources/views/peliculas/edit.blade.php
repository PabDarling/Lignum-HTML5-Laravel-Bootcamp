<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Editar Película</h2>
            <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" value="{{ $pelicula->titulo }}">
                </div>
                <div class="form-group">
                    <label for="anno">Año:</label>
                    <input type="number" name="anno" class="form-control" id="anno" value="{{ $pelicula->anno }}">
                </div>
                <div class="form-group">
                    <label for="duracion">Duración:</label>
                    <input type="text" name="duracion" class="form-control" id="duracion" value="{{ $pelicula->duracion }}">
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis:</label>
                    <textarea name="sinopsis" class="form-control" id="sinopsis" rows="3">{{ $pelicula->sinopsis }}</textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen actual:</label><br>
                    <img src="{{ asset($pelicula->imagen) }}" alt="Imagen de la película" style="max-width: 200px;">
                </div>
                <div class="form-group">
                    <label for="nueva_imagen">Cambiar imagen:</label>
                    <input type="file" name="nueva_imagen" class="form-control-file" id="nueva_imagen">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
</div>
