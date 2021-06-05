<?php $__env->startSection('page-title', 'Accedi al tuo account'); ?>

<?php $__env->startSection('page-content'); ?>

<div class="login-container flex-rows">
    <div class="brand">
        <img src="<?php echo e(asset('./images/logos/eticket_logo_light.svg')); ?>"/>
        <h3 style="color: white">Accedi o crea un nuovo account</h3>
    </div>
    <div style="max-width: 373px">
        <div class="alert card">
            <p>Se rappresenti un organizzatore di eventi <a class="link" href="<?php echo e(route('lavora-con-noi')); ?>">leggi le nostre modalità di adesione</a>.</p>
        </div>
        <div class="login-form card">
            <h2>Accedi</h2>
            <div>
                <?php echo e(Form::open(array('route' => 'login'))); ?>


                    <div class="wrap-input">
                        <?php echo e(Form::text('username', '', ['placeholder'=>'username','id' => 'username-input'])); ?>


                        <?php if($errors->first('username')): ?>
                            <ul class="errors">
                                <?php $__currentLoopData = $errors->get('username'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($message); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                         <?php endif; ?>
                    </div>

                    <div class="wrap-input">
                        <?php echo e(Form::password('password', [ 'placeholder'=>'password','id' => 'password-input'])); ?>


                        <?php if($errors->first('password')): ?>
                            <ul class="errors">
                                <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($message); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div style="text-align:center">
                        <?php echo e(Form::submit('Accedi',['class'=> 'default-btn'])); ?>

                    </div>
                    <?php echo e(Form::close()); ?>

                    <div style="text-align:center; margin-top: 20px">
                        <p>Non hai un account? <a class="link" href= "<?php echo e(route('registraUser')); ?>" >Registrati</a></p>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.public', ["headerVisible" => false, "footerVisible" => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/auth/login.blade.php ENDPATH**/ ?>