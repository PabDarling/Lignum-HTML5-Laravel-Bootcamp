<!-- resources/views/actors/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice de Actores</title>
</head>
<body>
    <h1>Listado de Actores</h1>

    @if($actores->isEmpty())
        <p>No hay actores disponibles.</p>
    @else
        <ul>
            @foreach($actores as $actor)
                <li>{{ $actor->nombre }}</li>
                <!-- Mostrar otros detalles del actor si es necesario -->
            @endforeach
        </ul>
    @endif

    <!-- resources/views/actors/index.blade.php -->


@section('content')
    <h1>Listado de Actores</h1>

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" id="openModalBtn">Abrir Modal</button>

    <!-- Modal Bootstrap -->
    <div class="modal" id="actorModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Listado de Actores</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se mostrarán los datos de los actores -->
                    <ul id="actorList"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#openModalBtn").click(function(){
                $.ajax({
                    url: "{{ route('obtenerActores') }}", // Ruta a la función que obtiene los actores
                    type: "GET",
                    success: function(data){
                        $("#actorList").empty();

                        if (data.length > 0) {
                            data.forEach(function(actor) {
                                $("#actorList").append("<li>" + actor.nombre + "</li>");
                            });
                        } else {
                            $("#actorList").append("<p>No hay actores disponibles.</p>");
                        }

                        $("#actorModal").modal("show"); // Mostrar el modal
                    },
                    error: function(){
                        alert("Error al obtener los datos de los actores");
                    }
                });
            });
        });
    </script>
@endsection

</body>
</html>



