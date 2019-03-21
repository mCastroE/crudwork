<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4 style="position: absolute;"><strong>Profesores</strong></h4>
            <a href="<?php echo e(URL::to('profesores/create')); ?>">
                <button type="button" class="btn btn-primary float-right">Añadir Profesor</button>
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Profesor</th>
                    
                    
                    <th>Publicaciones</th>
                    <th>Opciones</th>
                </tr>
                <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($profesor->nombre); ?></td>
                        
                        
                        <td>
                            <ul class="list-group">
                                <?php $__currentLoopData = $profesor->publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->iteration > 0): ?>
                                        <li class="list-group-item">
                                            <?php echo e($publicacion->referencia); ?>

                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($profesor->publicaciones) < 1): ?>
                                    <li class="list-group-item">
                                        Sin publicaciones.
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </td>
                        <td>
                            <div style="float: right">
                                <?php echo Form::open(['route'=>['profesores.destroy', $profesor->id], 'method'=>'DELETE']); ?>

                                    <button name="submit" type="submit" class="btn btn-sm btn-danger pull-right">Borrar</button>
                                <?php echo Form::close(); ?>

                            </div>
                            <a href="<?php echo e(route("profesores.edit", $profesor->id)); ?>" class="btn btn-sm btn-info pull-right" style="margin: 5px">Editar</span></a>
                            <a href="<?php echo e(route("publicaciones.index1", $profesor->id)); ?>" class="btn btn-sm btn-success pull-right" style="margin: 5px">Ir a publicaciones</span></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\mario\crudwork\resources\views/profesores/index.blade.php */ ?>