<?php $__env->startSection('page'); ?>
<div class="container flex-rows">
    <section style="width: fit-content" id="user-section">
        <?php echo $__env->yieldContent('form'); ?>
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/layouts/forms.blade.php ENDPATH**/ ?>