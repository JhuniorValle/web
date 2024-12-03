<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h1 class="mb-4">Editar usuarios</h1>

    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login_form-main\resources\views/users/edit.blade.php ENDPATH**/ ?>