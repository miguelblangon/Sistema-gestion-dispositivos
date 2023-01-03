<?php $__env->startSection('content'); ?>
<div class="row text-center" ><h3>Visualizar Equipo</h3></div>
    <div class="row">
        <div class="col text-center">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><?php echo e(ucwords('nombre del equipo')); ?> </label>
                <input type="text" class="form-control"  name="nombreEquipo" aria-describedby="emailHelp"
                <?php if(isset($equipo->nombreEquipo)): ?>
                    value="<?php echo e($equipo->nombreEquipo); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('procesador')); ?> </label>
                <input type="text" class="form-control"  name="procesador"
                <?php if(isset($equipo->procesador)): ?>
                    value="<?php echo e($equipo->procesador); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('placa Base')); ?> </label>
                <input type="text" class="form-control"  name="placaBase"
                <?php if(isset($equipo->placaBase)): ?>
                    value="<?php echo e($equipo->placaBase); ?>"
                <?php endif; ?>
                required>
            </div>
        </div>
        <div class="col text-center">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('disco Duro')); ?> </label>
                <input type="text" class="form-control"  name="discoDuro"
                <?php if(isset($equipo->discoDuro)): ?>
                    value="<?php echo e($equipo->discoDuro); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('sistema Operativo')); ?> </label>
                <input type="text" class="form-control"  name="sistemaOperativo"
                <?php if(isset($equipo->sistemaOperativo)): ?>
                    value="<?php echo e($equipo->sistemaOperativo); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('tipo')); ?> </label>

                <select class="form-control" name="tipo" required>
                        <option value=""> Selecciona ...</option>
                        <option value="portatil" <?php echo e(( isset($equipo->tipo) == "portatil" ? "selected":"")); ?>> <?php echo e(ucwords('portatil')); ?> </option>
                        <option value="pc" <?php echo e(( isset($equipo->tipo) == "pc"  ? "selected":"")); ?>><?php echo e(ucwords('pc')); ?></option>
                </select>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/equipos/verEquipo.blade.php ENDPATH**/ ?>