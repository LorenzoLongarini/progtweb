    <?php echo e(Form::open(array('route' => ['cerca']))); ?>

    <div class="multiple-input">
        <div class="wrap-input">
            <?php echo e(Form::text ('titolo', null, array('placeholder' => 'Nome evento'))); ?>

        </div>

        <div class="wrap-input">
            <?php echo e(Form::text ('descrizione', null, array('placeholder' => 'Descrizione'))); ?>

        </div>

        <div class="wrap-input">
            <?php echo e(Form::text ('organizzatore', null, array('placeholder' => 'Organizzatore'))); ?>

        </div>

        <div class="wrap-input">
            <?php echo e(Form::select ('regione', Regioni::lista_regioni )); ?>

        </div>

        <div id="date-input" class="wrap-input">
            <?php echo e(Form::date ('data', date('Y-m-d'), array('min' => date('Y-m-d')))); ?>

        </div>

        <div id="button-input" class="wrap-input">
            <?php echo e(Form::submit ('Cerca', ["class" => "default-btn", "id" => "search-btn"])); ?>

        </div>
    </div>
<?php echo e(Form::close()); ?>



<?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/inserts/ricercaEventi.blade.php ENDPATH**/ ?>