
<div class="form">
    <?php echo e(Form::open(array('route' => 'aggiungiEvento.store', 'id' =>'dashborard-livello3' , 'files' => true /*'class' => some-bollocks*/))); ?>

   
    <h2>Informazioni generali</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('titolo', 'Nome Evento' /*class-type*/)); ?>

            <?php echo e(Form::text ('titolo', '' /*class-type*/)); ?>

            <?php if($errors->first('titolo')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('titolo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('artista', 'Artista'/*class-type*/)); ?>

            <?php echo e(Form::text ('artista', '' /*class-type*/)); ?>

          <?php if($errors->first('artista')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('artista'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
    </div>
        
    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('regione', 'Regione' /*class-type*/)); ?>

            <?php echo e(Form::select ('regione', ['','Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
                'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
                'Marche', 'Lazio', 'Abruzzo', 'Molise',
                'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna'], '' )); ?>

                <?php if($errors->first('regione')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('regione'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('luogo', 'Luogo' /*class-type*/)); ?>

            <?php echo e(Form::text ('luogo', '' /*class-type*/)); ?>

            <?php if($errors->first('luogo')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('luogo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
        
        <div class="wrap-input">
            <?php echo e(Form::label ('data', 'Data' /*class-type*/)); ?>

            <?php echo e(Form::date ('data', '' /*class-type*/ )); ?>

            <?php if($errors->first('data')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('imgName', 'Copertina' /*class-type*/)); ?>

            <?php echo e(Form::file ('imgName' /*class-type*/)); ?>

            <?php if($errors->first('imgName')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('imgName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('mapsUrl', 'Url' /*class-type*/)); ?>

            <?php echo e(Form::text ('mapsUrl', 'a' /*class-type*/)); ?>

        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('descrizione', 'Descrizione Completa' /*class-type*/)); ?>

            <?php echo e(Form::textarea ('descrizione', ''  /*class-type*/)); ?>

            <?php if($errors->first('descrizione')): ?>
                <ul class="errors">
                    <?php $__currentLoopData = $errors->get('descrizione'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
    </div>

    <div class="single-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('programma', 'Programma' /*class-type*/)); ?>

            <?php echo e(Form::text ('programma', '' /*class-type*/)); ?>

            <?php if($errors->first('programma')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('programma'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
    </div>
    
    <h2>Biglietti</h2>
    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::label ('bigliettiDisp', 'Biglietti Disponibili' /*class-type*/ )); ?>

            <?php echo e(Form::text ('bigliettiDisp', '' /*class-type*/)); ?>

            <?php if($errors->first('bigliettiDisp')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('bigliettiDisp'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
        </div>
        <div class="wrap-input">
            <?php echo e(Form::label ('prezzo', 'Prezzo Biglietto' /*class-type*/ )); ?>

            <?php echo e(Form::text ('prezzo', '' /*class-type*/)); ?>

            <?php if($errors->first('prezzo')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('prezzo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>

        </div>
    </div>

    <div>
    <?php echo e(Form::label ('sconto', 'Sconto' /*class-type*/ )); ?>

    <?php echo e(Form::text ('sconto', '' /*class-type*/)); ?>

    <?php if($errors->first('sconto')): ?>
                <ul>
                    <?php $__currentLoopData = $errors->get('sconto'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="errors"><?php echo e($message); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
    </div>
    <div>


    <?php echo e(Form::label ('dataSconto', 'Data inizio sconto')); ?>

    <?php echo e(Form::date ('dataSconto')); ?>

   

    </div>

    <div>
    <?php echo e(Form::submit ('Conferma' /*class-type*/)); ?>

    </div>

    <div>
    <?php echo e(Form::reset ('Annulla' /*class-type*/)); ?>

    </div>
<?php echo e(Form::close()); ?>

</div>

<?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/inserts/dashboard-livello3.blade.php ENDPATH**/ ?>