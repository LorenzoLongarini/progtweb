<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>
        
        <?php
            $authBtn = false; $searchBtn = false; $withHeaderClass;

            if(!isset($search) || $search == true)
                $searchBtn = true;

            if(!isset($auth) || $authBtn == true)
                $authBtn = true;

            if(!isset($headerVisible) ||  $headerVisible == true){
                $withHeaderClass = "withHeader";
            } 
        ?>

        <?php echo $__env->make('includes/header', ["searchBtn" => $searchBtn, "toggleThemeBtn" => true ,"authBtn" => $authBtn], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main id="page-content" class="<?php echo e($withHeaderClass ?? ''); ?>">
            <?php echo $__env->yieldContent('page-content'); ?>
        </main>
        
        <?php if(!isset($footerVisible) ||  $footerVisible == true): ?>
            <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <?php endif; ?>

    </body>

</html><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/layouts/public.blade.php ENDPATH**/ ?>