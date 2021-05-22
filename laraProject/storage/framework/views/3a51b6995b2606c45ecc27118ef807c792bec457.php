<!DOCTYPE html>
<html>

    <?php echo $__env->make('layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>

        <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main id="page-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
            
            <?php echo $__env->yieldContent('event-content'); ?>
            <?php echo $__env->yieldContent('about-content'); ?>
            <?php echo $__env->yieldContent('modifica-dati-content'); ?>
            <?php echo $__env->yieldContent('faq-content'); ?>
        </main>
            

        <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    </body>
</html><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/layouts/public.blade.php ENDPATH**/ ?>