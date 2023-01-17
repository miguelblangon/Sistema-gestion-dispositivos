      <div class="bg-white w-full mx-auto border border-gray-200" x-data="{selected:1}">
              <ul class="shadow-box">
                    <li class="relative border-b border-gray-200" x-data="{selected:null}">
                        <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                            <div class="text-center text-capitalize fs-4 fw-bolder"><?php echo e($nombre); ?></div>
                        </button>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="p-6">
                                <form action="<?php echo e($action); ?>" method="get">
                                    <div class="row g-3">
                                        <?php for($i = 0; $i < $max; $i++): ?>
                                            <?php if($tipo[$i]=='text'): ?>
                                                <div class="<?php echo e($colInput); ?>">
                                                    <input type="text" class="form-control" name="<?php echo e($name[$i]); ?>" placeholder="<?php echo e($nomPara[$i]); ?>" aria-label="<?php echo e($nomPara[$i]); ?>">
                                                </div>
                                            <?php endif; ?>
                                            <?php if($tipo[$i]=='select'): ?>
                                                <div class="<?php echo e($colInput); ?>">
                                                    <select class="form-select" name="<?php echo e($name[$i]); ?>" aria-label="<?php echo e($nomPara[$i]); ?>">
                                                        <option value="" selected><?php echo e($nomPara[$i]); ?></option>
                                                        <?php if(isset($selectIfo)): ?>
                                                            <?php $__currentLoopData = $selectIfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($select->{$selectId}); ?>"><?php echo e($select->{$selectNombre}); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            <?php endif; ?>
                                             <?php if($tipo[$i]=='date'): ?>
                                                <div class="<?php echo e($colInput); ?>">
                                                    <input class="form-control" type="date" name="<?php echo e($name[$i]); ?>" placeholder="<?php echo e($nomPara[$i]); ?>" />
                                                </div>
                                             <?php endif; ?>





                                        <?php endfor; ?>
                                        <div class="<?php echo e($colbutton); ?>">
                                            <button type="submit" class="<?php echo e($btnClas); ?>" name="<?php echo e($btnName); ?>"><?php echo e($boton); ?> </button>
                                          </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
          </div>

<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/buscador/buscador.blade.php ENDPATH**/ ?>