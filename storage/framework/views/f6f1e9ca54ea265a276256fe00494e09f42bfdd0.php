<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Equipos')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row mb-2">
                        <div class="col text-center">
                            <button  type="button" class="btn btn-outline-primary"  id="equipos">
                                Equipos
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <?php if(session('equipos_mensaje')): ?>
                                <div class="<?php echo e(session('equipos_clase')); ?>">
                                    <?php echo e(session('equipos_mensaje')); ?>

                                </div>
                            <?php endif; ?>
                            <?php echo $__env->make('buscador.buscador',['nombre'=>'buscador' ,'action'=> "equipos",'max'=>3,
                                                            //Parametros del input
                                                                'name'=>['nombreEquipo','placaBase','usuarios_id'],
                                                                'nomPara'=>['Nombre del Equipo','Placa Base','Seleciona un Cliente'],
                                                                'colInput'=>'col-4',
                                                                'tipo'=>['text','text','select'],
                                                                'selectIfo'=>$clientes,'selectId'=>'id','selectNombre'=>'nombre',
                                                            //Parametros del boton
                                                                'btnClas'=>'bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-3 rounded text-capitalize',
                                                                'btnName'=>'enviar','boton'=>'buscar','colbutton'=>'col-2'
                                                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('equipos.tabla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo e($equipos->links()); ?>

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
<?php /**PATH C:\xampp\htdocs\etiquetas\resources\views/equipos/index.blade.php ENDPATH**/ ?>