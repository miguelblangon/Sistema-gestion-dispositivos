<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Equipo
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-evenly">
    <div class="row g-2">
            <div class="col-6">
                <label for="exampleInputEmail1" class="form-label"><?php echo e(ucwords('nombre del equipo')); ?> </label>
                <input type="text" class="form-control"  name="nombreEquipo" aria-describedby="emailHelp"
                <?php if(isset($equipo->nombreEquipo)): ?>
                    value="<?php echo e($equipo->nombreEquipo); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('procesador')); ?> </label>
                <input type="text" class="form-control"  name="procesador"
                <?php if(isset($equipo->procesador)): ?>
                    value="<?php echo e($equipo->procesador); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('placa Base')); ?> </label>
                <input type="text" class="form-control"  name="placaBase"
                <?php if(isset($equipo->placaBase)): ?>
                    value="<?php echo e($equipo->placaBase); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('disco Duro')); ?> </label>
                <input type="text" class="form-control"  name="discoDuro"
                <?php if(isset($equipo->discoDuro)): ?>
                    value="<?php echo e($equipo->discoDuro); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('sistema Operativo')); ?> </label>
                <input type="text" class="form-control"  name="sistemaOperativo"
                <?php if(isset($equipo->sistemaOperativo)): ?>
                    value="<?php echo e($equipo->sistemaOperativo); ?>"
                <?php endif; ?>
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('tipo')); ?> </label>

                <select class="form-control" name="tipo" required>
                        <option value=""> Selecciona ...</option>
                        <option value="portatil"
                        <?php if(isset($equipo->tipo)): ?>
                            <?php echo e(($equipo->tipo == "portatil" ? "selected":"" )); ?>

                        <?php endif; ?> > <?php echo e(ucwords('portatil')); ?> </option>

                        <option value="pc" <?php if(isset($equipo->tipo)): ?>
                            <?php echo e(($equipo->tipo == "pc" ? "selected":"" )); ?>

                        <?php endif; ?> ><?php echo e(ucwords('pc')); ?></option>
                </select>
            </div>
        </div>
        </div>
        <div class="row mt-3">
            <?php echo $__env->make('historico.historico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/equipos/verEquipo.blade.php ENDPATH**/ ?>