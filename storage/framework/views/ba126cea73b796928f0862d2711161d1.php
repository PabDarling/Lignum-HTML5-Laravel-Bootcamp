<h1>Listado de Películas</h1>
<?php if($peliculas->isEmpty()): ?>
    <p>No hay películas disponibles.</p>
<?php else: ?>
    <ul>
        <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($pelicula->titulo); ?></li>
            <!-- Mostrar otros detalles de la película si es necesario -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\laragon\www\laravel\resources\views/peliculas/index.blade.php ENDPATH**/ ?>