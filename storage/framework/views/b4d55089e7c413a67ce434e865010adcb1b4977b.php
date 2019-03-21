<?php $__env->startSection('content'); ?>
    <br>
    <div class="card">
        <div class="card-header title">
            <h4><strong>Añadir publicacion</strong></h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?php echo Form::open(['route'=>['publicaciones.store'], 'method'=>'POST']); ?>

                        <div class="form-group<?php echo e($errors->has('referencia') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('referencia', 'Referencia:'); ?>

                            <?php echo Form::text('referencia', null, ['class'=>'form-control', 'placeholder'=>'Introduce la referencia de la publicacion', 'value'=>old('referencia')]); ?>


                            <?php if($errors->has('referencia')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('referencia')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('tipo', 'Tipo:'); ?>

                            <?php echo Form::text('tipo', null, ['class'=>'form-control', 'placeholder'=>'Introduce el tipo de la publicacion', 'value'=>old('tipo')]); ?>


                            <?php if($errors->has('tipo')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('tipo')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group<?php echo e($errors->has('year') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('year', 'Año de la publicacion:'); ?>

                            <?php echo Form::text('year', null, ['class'=>'form-control', 'placeholder'=>'Introduce el año de la publicacion', 'value'=>old('year')]); ?>


                            <?php if($errors->has('year')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('year')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('profesores', 'Seleccione el profesor:'); ?>

                            <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  value="<?php echo e($profesor->id); ?>"  name="ids[]">
                                        <label class="form-check-label" for="defaultCheck1" >
                                            <?php echo e($profesor->nombre); ?>

                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="text-right">
                            <?php echo Form::submit('Guardar', ['class'=>'btn btn-primary btn-md']); ?>


                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\mario\crudwork\resources\views/publicaciones/create.blade.php */ ?>