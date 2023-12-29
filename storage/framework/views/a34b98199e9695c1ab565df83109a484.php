<!-- resources/views/actors/index.blade.php -->

<h1>Listado de Actores</h1>

<?php if($actores->isEmpty()): ?>
    <p>No hay actores disponibles.</p>
<?php else: ?>
    <ul>
        <?php $__currentLoopData = $actores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($actor->nombre); ?></li>
            <!-- Mostrar otros detalles del actor si es necesario -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\laragon\www\laravel\resources\views/actors/index.blade.php ENDPATH**/ ?>