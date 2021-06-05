<?php $__env->startSection('page-body'); ?>

    <main id="blank-page-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/layouts/blank.blade.php ENDPATH**/ ?>