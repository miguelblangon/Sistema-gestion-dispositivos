
<div class="row g-3">
    <span class="text-center text-capitalize fs-4 fw-bolder">datos del equipo</span>
    <div class="col-4"><label class="text-capitalize fs-5 fw-bolder mr-2">nombre del equipo</label><span><?php echo e($equipo->nombreEquipo); ?></span> </div>
    <div class="col-4"><label class="text-capitalize fs-5 fw-bolder mr-2">procesador</label><span><?php echo e($equipo->procesador); ?></span> </div>
    <div class="col-4"><label class="text-capitalize fs-5 fw-bolder mr-2">placa base</label><span><?php echo e($equipo->placaBase); ?></span> </div>
    <div class="col-4"><label class="text-capitalize fs-5 fw-bolder mr-2">disco duro</label><span><?php echo e($equipo->discoDuro); ?></span> </div>
    <div class="col-4"><label class="text-capitalize fs-5 fw-bolder mr-2">sistema operativo</label><span><?php echo e($equipo->sistemaOperativo); ?></span> </div>
    <div class="col-4"><label class="text-capitalize fs-5 fw-bolder mr-2">tipo</label><span><?php echo e($equipo->tipo); ?></span> </div>
</div>
<?php echo $__env->make('historico.historico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row g-3">
     <span class="text-center text-capitalize fs-4 fw-bolder">incidencia</span>
        <div class="col-6">
            <label for="inputAddress" class="form-label text-capitalize">procedimiento</label>
            <input type="text" class="form-control rounded-md" name="procedimiento" id="procedimiento" required>
             
             <div class="valid-feedback">Correcto!</div>
             <div class="invalid-feedback">Introduce información valida</div>
             
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label text-capitalize">pieza</label>
            <input type="text" class="form-control rounded-md" name="pieza" id="pieza" required>
             
             <div class="valid-feedback">Correcto!</div>
             <div class="invalid-feedback">Introduce información valida</div>
             
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label text-capitalize">descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="6" required></textarea>
             
             <div class="valid-feedback">Correcto!</div>
             <div class="invalid-feedback">Introduce información valida</div>
             
        </div>
        <input type="hidden" name="equipos_id" id="equipos_id" value="<?php echo e($equipo->id); ?>">

</div>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/historico/crear.blade.php ENDPATH**/ ?>