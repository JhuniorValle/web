<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
<body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="" alt="" width="300">
                </a>          
            </div>
            <div class="col-md-1">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Cerrar sesion')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">

        <?php if(session('success')): ?>
            <div class="alert alert-success" role="alert"> 
              <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <h1 class="display-5 fw-bold">Hola, <?php echo e(auth()->user()->name); ?></h1>
        <p class="col-md-8 fs-4">Bienvenido al panel de control. Aqui veras la lista de usuarios registrados..</p>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <a href="<?php echo e(route('users.show', $user->id)); ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                            <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

      </div>
    </div>

  </div>
</main>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\login_form-main\resources\views/dashboard.blade.php ENDPATH**/ ?>