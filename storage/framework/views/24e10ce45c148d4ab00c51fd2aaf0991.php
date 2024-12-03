<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h1 class="mb-4">Detalles del usuario</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($user->name); ?></h5>
            <p class="card-text"><strong>Email:</strong> <?php echo e($user->email); ?></p>
            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning">Editar</a>
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login_form-main\resources\views/users/show.blade.php ENDPATH**/ ?>