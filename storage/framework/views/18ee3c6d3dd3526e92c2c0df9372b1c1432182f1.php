<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Dueño Del Equipo </th>
              <th scope="col">Nombre Del Equipo</th>
              <th scope="col">Procedimiento</th>
              <th scope="col">Fecha</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $historico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parametro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($parametro->id); ?></td>
                    <th><?php echo e($parametro->equipo->usuario->nombre); ?></th>
                    <td><?php echo e($parametro->equipo->nombreEquipo); ?></td>
                    <td><?php echo e($parametro->procedimiento); ?></td>
                    <td><?php echo e($parametro->created_at->format('d-m-Y')); ?></td>

                    <td class="d-flex flex-row">
                        <div class="mr-2">
                            <form action="<?php echo e(route('historico.destroy',$parametro->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="mr-2">
                            <button class="btn btn-warning" name="editarHistorico" value="<?php echo e($parametro->id); ?>"   ><i class="bi bi-person-gear"></i> </button>
                        </div>
                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/historico/tabla.blade.php ENDPATH**/ ?>