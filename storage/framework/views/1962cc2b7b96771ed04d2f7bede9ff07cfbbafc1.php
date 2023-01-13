<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre Del equipo </th>
              <th scope="col">Placa Base</th>
              <th scope="col">Persona</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parametro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($parametro->id); ?></th>
                    <td><?php echo e($parametro->nombreEquipo); ?></td>
                    <td><?php echo e($parametro->placaBase); ?></td>
                    <td><?php echo e($parametro->usuario->nombre); ?></td>
                    <td class="d-flex flex-row">
                        <div class="mr-2">
                            <form action="<?php echo e(route('equipos.destroy',$parametro->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="mr-2">
                            <button class="btn btn-warning" name="editarEquipo" value="<?php echo e($parametro->id); ?>"   ><i class="bi bi-person-gear"></i> </button>
                        </div>
                        <div class="mr-2">
                            <button class="btn btn-primary" name="historico" value="<?php echo e($parametro->id); ?>"   ><i class="bi bi-archive"></i></button>
                        </div>
                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/equipos/tabla.blade.php ENDPATH**/ ?>