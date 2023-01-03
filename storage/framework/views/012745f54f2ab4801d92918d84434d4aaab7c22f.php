    <?php if(isset($envioEspecial)): ?>
        <?php echo method_field($envioEspecial); ?>
    <?php endif; ?>
       <div class="row g-2">
        <div class="col-6">
            <label for="exampleInputEmail1" class="form-label"><?php echo e(ucwords('nombre del equipo')); ?> </label>
            <input type="text" class="form-control"  name="nombreEquipo" aria-describedby="emailHelp"
            <?php if(isset($envioEspecial)): ?>
                value="<?php echo e($equipo->nombreEquipo); ?>"
            <?php endif; ?>
            required>
            <div id="emailHelp" class="form-text">Nombre de la cosa que se va a reparar</div>
              
              <div class="valid-feedback">Correcto!</div>
              <div class="invalid-feedback">Introduce información valida</div>
              
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('procesador')); ?> </label>
            <input type="text" class="form-control"  name="procesador"
            <?php if(isset($envioEspecial)): ?>
                value="<?php echo e($equipo->procesador); ?>"
            <?php endif; ?>
            required>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('placa base')); ?> </label>
            <input type="text" class="form-control"  name="placaBase"
            <?php if(isset($envioEspecial)): ?>
                value="<?php echo e($equipo->placaBase); ?>"
            <?php endif; ?>
            required>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('disco duro')); ?> </label>
            <input type="text" class="form-control"  name="discoDuro"
            <?php if(isset($envioEspecial)): ?>
                value="<?php echo e($equipo->discoDuro); ?>"
            <?php endif; ?>
            required>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('sistema operativo')); ?> </label>
            <input type="text" class="form-control"  name="sistemaOperativo"
            <?php if(isset($envioEspecial)): ?>
                value="<?php echo e($equipo->sistemaOperativo); ?>"
            <?php endif; ?>
            required>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
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
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('usuario')); ?> </label>
            <select  class="form-control" name="usuarios_id" required>
                <option value=""> Selecciona ...</option>
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($val->id); ?>"
                        <?php if(isset($equipo->usuarios_id)): ?>
                            <?php echo e(($equipo->usuarios_id == $val->id ? "selected":"")); ?>

                        <?php endif; ?>  ><?php echo e($val->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            
        </div>
        <?php if(isset($envioEspecial)): ?>
        <div class="col-12">
            <div id="codigQr" class="visible-print">
                <img class="mx-auto d-block" src="<?php echo e(asset("$rutaQr")); ?>" alt="código Qr">
            </div>
            <div class="mt-2 text-center">
              <a href="<?php echo e(route('descargar-qr',$equipo->id)); ?>" target="_blank" class="btn btn-primary" >Imprimir</a>
            </div>
            
        </div>
        <?php endif; ?>

       </div>









<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/equipos/crear.blade.php ENDPATH**/ ?>