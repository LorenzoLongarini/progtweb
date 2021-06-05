<?php $__env->startSection('page-title', 'Amministratore'); ?>

<?php $__env->startSection('usernavbar'); ?>
    <?php echo $__env->make('includes.usernavbar.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <?php echo $__env->make('inserts.dashboard-livello4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/pages/user-level4.blade.php ENDPATH**/ ?>