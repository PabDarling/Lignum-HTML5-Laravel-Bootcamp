<h1>Listado de Películas</h1>
@if($peliculas->isEmpty())
    <p>No hay películas disponibles.</p>
@else
    <ul>
        @foreach($peliculas as $pelicula)
            <li>{{ $pelicula->titulo }}</li>
            <!-- Mostrar otros detalles de la película si es necesario -->
        @endforeach
    </ul>
@endif

