<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($usuario->id); ?></th>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->apellidos); ?></td>
                    <td class="d-flex flex-row">
                        <div class="mr-2">
                            <form action="<?php echo e(route('usuarios.destroy',$usuario->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="">
                            <button class="btn btn-warning"name="editarUsuario" value="<?php echo e($usuario->id); ?>"   ><i class="bi bi-person-gear"></i></button>
                        </div>
                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/usuarios/tabla.blade.php ENDPATH**/ ?>