    

<?php $__env->startSection('form'); ?>
<div id="dashboard" class="form">
    <?php echo e(Form::open(array('route' => ['aggiungiEvento.store'], 'id' =>'dashborard-livello4' , 'files' => true /*'class' => some-bollocks*/))); ?>

   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('bigliettiVenduti', 'Biglietti Venduti' /*class-type*/)); ?>

            
            <?php if($errors->first('titolo')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('titolo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
        
    </div>
    <div>
    <?php echo e(Form::submit ('Conferma')); ?>

    <?php echo e(Form::reset ('Reset')); ?>

    </div>

<?php echo e(Form::close()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/inserts/dashboard-livello4.blade.php ENDPATH**/ ?>