<?php if(isset($envioEspecial)): ?>
    <?php echo method_field($envioEspecial); ?>
<?php endif; ?>
<div class="row g-3">
    <span class="text-center text-capitalize fs-4 fw-bolder">incidencia</span>
    <div class="col-12">
        <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('equipo')); ?> </label>

        <select class="form-control" id="equipo_id" name="equipos_id" required>
                <option value=""> Selecciona ...</option>
                    <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($val->id); ?>"  <?php if(isset($historico)): ?><?php echo e(($historico->equipos_id == $val->id ? "selected":"")); ?><?php endif; ?>>
                            <?php echo e($val->nombreEquipo); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        
        <div class="valid-feedback">Correcto!</div>
        <div class="invalid-feedback">Introduce información valida</div>
        
    </div>
       <div class="col-6">
           <label for="inputAddress" class="form-label text-capitalize">procedimiento</label>
           <input type="text" class="form-control rounded-md" name="procedimiento" id="procedimiento"
            <?php if(isset($historico)): ?> value="<?php echo e($historico->procedimiento); ?>" <?php endif; ?> required>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
       </div>
       <div class="col-6">
           <label for="inputAddress" class="form-label text-capitalize">pieza</label>
           <input type="text" class="form-control rounded-md" name="pieza" id="pieza"
           <?php if(isset($historico)): ?> value="<?php echo e($historico->pieza); ?>" <?php endif; ?> required>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
       </div>
       <div class="col-12">
           <label for="inputAddress" class="form-label text-capitalize">descripción</label>
           <textarea class="form-control" name="descripcion" id="descripcion" rows="6" required><?php if(isset($historico)): ?><?php echo e($historico->descripcion); ?><?php endif; ?></textarea>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
       </div>
</div>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/historico/crearSinTarjet.blade.php ENDPATH**/ ?>