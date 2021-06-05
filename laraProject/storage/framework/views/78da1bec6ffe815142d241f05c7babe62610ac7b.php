<div class="form-blank">
    <?php echo e(Form::open(array('route' => 'inserisciFaq.store', 'id' =>'addproduct' , 'files' => true))); ?>

   
    <h2>Modulo inserimento FAQ</h2>
        <div class="wrap-input">
        <?php echo e(Form::label('domanda', 'Domanda')); ?>

        <?php echo e(Form::textarea('domanda')); ?>

        <?php if($errors->first('domanda')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('domanda'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>

        <div class="wrap-input">
        <?php echo e(Form::label('risposta',  'Risposta')); ?>

        <?php echo e(Form::textarea('risposta')); ?>

        <?php if($errors->first('risposta')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('risposta'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>

    <div>
    <?php echo e(Form::submit ('Conferma', ['class'=>''])); ?>

    </div>

    <div>
    <?php echo e(Form::reset ('Annulla' /*class-type*/)); ?>

    </div>
<?php echo e(Form::close()); ?>

</div>
<?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/inserts/insertFaq.blade.php ENDPATH**/ ?>