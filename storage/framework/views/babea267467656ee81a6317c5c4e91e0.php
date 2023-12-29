<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Nueva Película</h2>
            <form action="<?php echo e(route('peliculas.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese el título">
                </div>
                <div class="form-group">
                    <label for="anno">Año:</label>
                    <input type="number" name="anno" class="form-control" id="anno" placeholder="Ingrese el año">
                </div>
                <div class="form-group">
                    <label for="duracion">Duración:</label>
                    <input type="text" name="duracion" class="form-control" id="duracion" placeholder="Ingrese la duración">
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis:</label>
                    <textarea name="sinopsis" class="form-control" id="sinopsis" rows="3" placeholder="Ingrese la sinopsis"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name="imagen" class="form-control-file" id="imagen">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\laravel\resources\views/peliculas/create.blade.php ENDPATH**/ ?>