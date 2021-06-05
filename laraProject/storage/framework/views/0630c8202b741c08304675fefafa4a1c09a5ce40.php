<div id="auth-btn" class="login header-link-icon" title="Accedi o registrati">
    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>
    <?php if(auth()->guard()->check()): ?>
        <a title="Esci dal sito" class="login" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
            <span>Logout</span>
        </a> 
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="login" title="Accedi al tuo account">
            <span>Accedi</span> 
        </a>  
    <?php endif; ?>                 
</div><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/includes/widgets/auth.blade.php ENDPATH**/ ?>