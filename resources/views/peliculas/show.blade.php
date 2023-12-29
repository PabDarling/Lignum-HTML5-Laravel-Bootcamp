<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $pelicula->titulo }}</h2>
                    <p class="card-text"><strong>Año:</strong> {{ $pelicula->anno }}</p>
                    <p class="card-text"><strong>Duración:</strong> {{ $pelicula->duracion }}</p>
                    <p class="card-text"><strong>Sinopsis:</strong> {{ $pelicula->sinopsis }}</p>
                    <div class="text-center">
                        <img src="{{ asset($pelicula->imagen) }}" class="img-fluid" alt="Imagen de la película">
                    </div>
                    <div class="mt-3 text-center">
                        <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
