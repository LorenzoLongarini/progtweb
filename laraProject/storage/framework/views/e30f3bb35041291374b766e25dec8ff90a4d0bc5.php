
<div class="form">
    <?php echo e(Form::open(array('route' => ['aggiungiEvento.store'], 'id' =>'dashborard-livello2' , 'files' => true /*'class' => some-bollocks*/))); ?>

				
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('nome', 'Nome' /*class-type*/)); ?>

            <?php echo e(Form::text ('nome', '' /*class-type*/)); ?>

            /*<?php if($errors->first('titolo')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('titolo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('cognome', 'Cognome'/*class-type*/)); ?>

            <?php echo e(Form::text ('cognome', '' /*class-type*/)); ?>

            /*<?php if($errors->first('artista')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('artista'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
    </div>
        
    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('ivaFiscale', 'Codice Fiscale - P.Iva' /*class-type*/)); ?>

            <?php echo e(Form::text ('ivaFiscale', '' )); ?>

               /* <?php if($errors->first('regione')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('regione'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('email', 'Email' /*class-type*/)); ?>

            <?php echo e(Form::text ('email', '' /*class-type*/)); ?>

            /*<?php if($errors->first('luogo')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('luogo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
        
        <div class="wrap-input">
            <?php echo e(Form::label ('dataNascita', 'Data' /*class-type*/)); ?>

            <?php echo e(Form::date ('dataNascita', '' /*class-type*/ )); ?>

            /*<?php if($errors->first('data')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('username', 'Username' /*class-type*/)); ?>

            <?php echo e(Form::text ('username' /*class-type*/)); ?>

           /* <?php if($errors->first('imgName')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('imgName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('password', 'Password' /*class-type*/)); ?>

            <?php echo e(Form::text ('password', '' /*class-type*/)); ?>

        </div>
    </div>
    
    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('telefono', 'Telefono' /*class-type*/)); ?>

            <?php echo e(Form::textarea ('telefono', ''  /*class-type*/)); ?>

            /*<?php if($errors->first('descrizione')): ?>
                <ul class="errors">
                    <?php $__currentLoopData = $errors->get('descrizione'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('via', 'Via' /*class-type*/)); ?>

            <?php echo e(Form::text ('via', '' /*class-type*/)); ?>

            /*<?php if($errors->first('programma')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('programma'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('cap', 'Cap' /*class-type*/)); ?>

            <?php echo e(Form::text ('cap', '' /*class-type*/)); ?>

            /*<?php if($errors->first('programma')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('programma'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
    </div>
    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('città', 'Città' /*class-type*/)); ?>

            <?php echo e(Form::text ('città', '' /*class-type*/)); ?>

           /* <?php if($errors->first('programma')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('programma'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>*/
        </div>
    </div>


    <?php echo e(Form::label ('dataSconto', 'Data inizio sconto')); ?>

    <?php echo e(Form::date ('dataSconto')); ?>

   

    </div>

    <div>
    <?php echo e(Form::submit ('Modifica' /*class-type*/)); ?>

    </div>

    <div>
    <?php echo e(Form::reset ('Annulla' /*class-type*/)); ?>

    </div>
<?php echo e(Form::close()); ?>

</div>

<?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/inserts/dashboard-livello2.blade.php ENDPATH**/ ?>