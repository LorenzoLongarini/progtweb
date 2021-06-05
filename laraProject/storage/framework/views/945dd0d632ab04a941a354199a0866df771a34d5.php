<?php
    if(empty($url))
        $url = "default.png"
?>

<?php if(isset($event)): ?>

<?php endif; ?>

<?php if(empty($event)): ?>
<div class="cover-page"> 
    <img id="cover-img" src="<?php echo e(asset($img_url)); ?>"/>
    <div class="overlay-content flex-center">
        <div class="container">
            <div class="content-cover">
                <h2><?php echo e($title); ?></h2>
                <h3><?php echo e($description); ?></h3>
            </div>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/helpers/cover-page.blade.php ENDPATH**/ ?>