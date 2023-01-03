    <?php if(isset($envioEspecial)): ?>
        <?php echo method_field($envioEspecial); ?>
    <?php endif; ?>
    <div class="row g-2">
            <div class="col-6">
                <label for="exampleInputEmail1" class="form-label"><?php echo e(ucwords('nombre')); ?></label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->nombre); ?>"
                <?php endif; ?>
                required>
                
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un nombre valido</div>
                
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"><?php echo e(ucwords('apellidos')); ?> </label>
                <input type="text" class="form-control" id="apellidos" name="apellidos"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->apellidos); ?>"
                <?php endif; ?>
                required>
                 
                 <div class="valid-feedback">Correcto!</div>
                 <div class="invalid-feedback">Introduce un apellido valido</div>
                 
            </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> <?php echo e(ucwords('documento')); ?> </label>
                <input type="text" class="form-control" id="documento" name="documento"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->documento); ?>"
                <?php endif; ?>
                 required>
                  
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un documento valido</div>
                
              </div>
              <div class="col-6 pt-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="documento_tipo" value="cif"
                    <?php if(isset($usuario->documento_tipo)): ?>
                        <?php echo e(($usuario->documento_tipo == "cif" ? "checked":"" )); ?>

                    <?php endif; ?>
                    required
                    >
                    <label class="form-check-label" for="cif">
                        <?php echo e(ucwords('cif')); ?>

                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="documento_tipo"  value="nif"
                    <?php if(isset($usuario->documento_tipo)): ?>
                        <?php echo e(($usuario->documento_tipo == "nif" ? "checked":"" )); ?>

                    <?php endif; ?>
                    required
                    >
                    <label class="form-check-label" for="nif">
                       <?php echo e(ucwords('nif')); ?>

                    </label>
                     
                    <div class="valid-feedback">Correcto!</div>
                    <div class="invalid-feedback">Selecciona una opción</div>
                    
                  </div>
              </div>
              <div class="col-12">
                <label for="exampleInputPassword1" class="form-label"><?php echo e(ucwords('direccion')); ?> </label>
                <input type="text" class="form-control" id="direccion" name="direccion"
                maxlength="255"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->direccion); ?>"
                <?php endif; ?>
                 required>
                  
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce una dirección valida</div>
                
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"><?php echo e(ucwords('codigo postal')); ?></label>
                <input type="text" class="form-control" id="cp" name="cp" maxlength="5"
                pattern="[0-9]+"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->cp); ?>"
                <?php endif; ?>
                 required>
                  
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un CP valido</div>
                
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"><?php echo e(ucwords('ciudad')); ?> </label>
                <input type="text" class="form-control" id="ciudad" name="ciudad"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->ciudad); ?>"
                <?php endif; ?>
                 required>
                  
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce una ciudad valida</div>
                
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"><?php echo e(ucwords('telefono')); ?> </label>
                <input type="text" class="form-control" id="telefono" name="telefono"
                pattern="[0-9]+" maxlength="9"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->telefono); ?>"
                <?php endif; ?>
                 required>
                  
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un telefono valido</div>
                
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"><?php echo e(ucwords('mail')); ?></label>
                <input type="email" class="form-control" id="mail" name="mail"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                <?php if(isset($envioEspecial)): ?>
                    value="<?php echo e($usuario->mail); ?>"
                <?php endif; ?>
                 required>
                  
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un mail valido</div>
                
              </div>





    </div>










<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/usuarios/crear.blade.php ENDPATH**/ ?>