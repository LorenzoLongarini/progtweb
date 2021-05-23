<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>

        <?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main id="page-content">
            <?php $__env->startSection('page-content'); ?>
            <?php echo $__env->yieldSection(); ?>
        </main>
            
        <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    </body>
</html><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/layouts/root.blade.php ENDPATH**/ ?>