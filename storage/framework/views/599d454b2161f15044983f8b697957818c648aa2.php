<?php $__env->startSection('content'); ?>
    <br>
    <div class="card">
        <div class="card-header title">
            <h4><strong>Editar profesor</strong></h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?php echo Form::model($profesor, ['route'=> ['profesores.update', $profesor->id], 'method'=>'PUT']); ?>

                        <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('nombre', 'Nombre:'); ?>

                            <?php echo Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'value'=>old('nombre')]); ?>


                            <?php if($errors->has('nombre')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nombre')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group<?php echo e($errors->has('grado') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('grado', 'Grado:'); ?>

                            <?php echo Form::text('grado', null, ['class'=>'form-control', 'placeholder'=>'Grado', 'value'=>old('grado')]); ?>


                            <?php if($errors->has('grado')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('grado')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group<?php echo e($errors->has('year') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('year', 'Año de contratacion:'); ?>

                            <?php echo Form::text('year', null, ['class'=>'form-control', 'placeholder'=>'Año de contratacion del profesor', 'value'=>old('year')]); ?>


                            <?php if($errors->has('year')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('year')); ?></strong>
                                </span>
                            <?php endif; ?>
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
<?php /* C:\Users\mario\crudwork\resources\views/profesores/edit.blade.php */ ?>