<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4 style="position: absolute;"><strong>Publicaciones</strong></h4>
            <a href="<?php echo e(URL::to('publicaciones/create')); ?>">
                <button type="button" class="btn btn-primary float-right">Añadir Publicacion</button>
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Referencia</th>
                    <th>Tipo</th>
                    <th>Año de Publicacion</th>
                    <th>Profesores Involucrados</th>
                    <th>Opciones</th>
                </tr>
                <?php $__currentLoopData = $pubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pub->referencia); ?></td>
                        <td><?php echo e($pub->tipo); ?></td>
                        <td><?php echo e($pub->year); ?></td>
                        <td>
                            <ul class="list-group">
                                <?php $__currentLoopData = $pub->profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->iteration > 0): ?>
                                        <li class="list-group-item">
                                            <?php echo e($profesor->nombre); ?>

                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($pub->profesores) < 1): ?>
                                    <li class="list-group-item">
                                        Sin Asignar.
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </td>
                        <td>
                            <div style="float: right">
                                <?php echo Form::open(['route'=>['publicaciones.destroy', $pub->id], 'method'=>'DELETE']); ?>

                                    <button name="submit" type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                <?php echo Form::close(); ?>

                            </div>
                            <a href="<?php echo e(route("publicaciones.edit", $pub->id)); ?>" class="btn btn-sm btn-info pull-right" style="margin-right: 5px">Editar</span></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\mario\crudwork\resources\views/publicaciones/index1.blade.php */ ?>