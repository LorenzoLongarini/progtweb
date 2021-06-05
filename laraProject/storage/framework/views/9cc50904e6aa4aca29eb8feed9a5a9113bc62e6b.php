<?php $__env->startSection('page-title', 'Cerca l\'evento che fa per te!'); ?>

<?php $__env->startSection('page-content'); ?>
    <?php echo $__env->make('helpers/cover-page', [
            'title' => 'Catalogo eventi', 
            'description' => 'Ti offriamo una vasta scelta per trovare il tuo evento preferito',
            'img_url' => '../storage/app/public/images/covers/catalogo-cover.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container block">
    <div id="search-form" class="form card container">
        <?php echo $__env->make('inserts.ricercaEventi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </div>
    <div class="container block">
        <?php if(isset($events)): ?>
            <?php if(count($events) < 1): ?>
                <div style="text-align:center">
                    <h1>La ricerca non ha prodotto nessun risultato!</h1>
                </div>
            <?php else: ?>
                <div class="event-list">
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="event">
                            <div class="event-left">
                                <div class="img-event">
                                    <?php echo $__env->make('helpers.img-event', ['imgName' => $event->imgName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="event-info flex-columns">
                                    <h2><?php echo e($event->titolo); ?></h2>
                                    <?php echo $__env->make('helpers.date-helper', ['eventDate' => $event->data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <h4><?php echo e($event->luogo); ?>, <?php echo e($event ->regione); ?></h4>
                                </div>
                            </div>
                            <div class="event-right">
                                <h4 class="price">€ <?php echo e($event->prezzo); ?></h4>
                                <?php echo e(link_to_route('evento', 'VEDI EVENTO', $parameters = ['id' => $event->eventoId], $attributes = ['class' => 'btn default-btn'])); ?>

                            </div>
                        </div>           
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?> 
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.public', ["search" => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/pages/catalogo.blade.php ENDPATH**/ ?>