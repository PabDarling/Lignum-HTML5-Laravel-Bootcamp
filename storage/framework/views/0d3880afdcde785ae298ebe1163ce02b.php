<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Nuevo Actor</h2>
            <form action="<?php echo e(route('actors.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label for="ano_nacimiento">Año de Nacimiento:</label>
                    <input type="number" name="ano_nacimiento" class="form-control" id="ano_nacimiento" placeholder="Ingrese el año de nacimiento">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\laravel\resources\views/actors/create.blade.php ENDPATH**/ ?>