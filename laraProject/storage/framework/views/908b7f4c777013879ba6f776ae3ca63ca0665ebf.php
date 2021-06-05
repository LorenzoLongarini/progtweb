<?php $__env->startSection('page-content'); ?>
    <div id="user-page-content" class="container flex-rows" >
        <aside id="user-nav" style="">    
           <?php echo $__env->yieldContent('usernavbar'); ?>
        </aside>    
        <div class="user-nav-separator"></div>  
        <section id="data-section">
            <?php echo $__env->yieldContent('form'); ?>
        </section>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/layouts/user.blade.php ENDPATH**/ ?>