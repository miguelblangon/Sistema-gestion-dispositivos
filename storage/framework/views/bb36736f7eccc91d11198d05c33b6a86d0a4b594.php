<?php if(isset($historial)): ?>
<div  <?php if(count($historial)>0): ?> style="height: 310px; border: 1px solid #ddd; overflow-y: scroll;" <?php endif; ?> >
    <?php $__currentLoopData = $historial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $histo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mt-2">
        <div class="card-body">
          <h5 class="card-title fw-bolder text-capitalize d-flex justify-content-evenly"><span><?php echo e($histo->created_at->format('d-m-Y')); ?></span> <span><?php echo e($histo->procedimiento); ?></span>  <span><?php echo e($histo->pieza); ?></span></h5>
          <p class="card-text lh-lg"> <?php echo str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $histo->descripcion); ?></p>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/historico/historico.blade.php ENDPATH**/ ?>