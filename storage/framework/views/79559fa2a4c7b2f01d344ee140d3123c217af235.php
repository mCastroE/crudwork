<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        <div class="container" style="margin-top: 40px;">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('partials.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>

<?php /* C:\Users\mario\crudwork\resources\views/layouts/app.blade.php */ ?>