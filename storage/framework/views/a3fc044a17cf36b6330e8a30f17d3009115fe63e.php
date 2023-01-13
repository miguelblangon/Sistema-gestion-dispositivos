<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-evenly">
                        <div class="col-auto text-center">
                            <?php if(session('usuarios_mensaje')): ?>
                                <div class="<?php echo e(session('usuarios_clase')); ?>">
                                    <?php echo e(session('usuarios_mensaje')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-evenly">
                                 <span class="align-middle text-capitalize fs-3 fw-bolder"> tabla de clientes </span>
                                <button  type="button" class="btn btn-outline-primary" id="usuarios">
                                    Clientes
                                </button>
                            </div>

                            <?php echo $__env->make('usuarios.tabla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="col-auto text-center">
                            <?php if(session('equipos_mensaje') ): ?>
                                <div class="<?php echo e(session('equipos_clase')); ?>">
                                    <?php echo e(session('equipos_mensaje')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-center ">
                                <span class="align-middle text-capitalize fs-3 fw-bolder">tabla de equipos</span>
                                <button  type="button" class="btn btn-outline-primary ml-2"  id="equipos">
                                    Equipos
                                </button>
                            </div>

                            <?php echo $__env->make('equipos.tabla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('modal.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/dashboard.blade.php ENDPATH**/ ?>