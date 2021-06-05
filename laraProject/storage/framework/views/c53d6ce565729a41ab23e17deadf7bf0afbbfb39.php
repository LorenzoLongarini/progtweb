
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
<ul>
    <li class="user-nav-link">
        <button id="dashboard" class="user-nav-btn active">Dashboard</button>
    </li>
    <li class="user-nav-link">
        <button  id="clienti" class="user-nav-btn">Clienti</button>
    </li>
    <li class="user-nav-link">
        <button  id="organizzazione" class="user-nav-btn">Organizzatori</button>
    </li>
    <li class="user-nav-link">
        <button  id="faq" class="user-nav-btn">FAQ</button>
    </li>
</ul>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isOrganiz')): ?>
<ul>
    <li class="user-nav-link">
        <button class="user-nav-btn active">Dashboard</button>
    </li>
    <li class="user-nav-link">
        <button class="user-nav-btn">Eventi</button>
    </li>
</ul>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isClient')): ?>
<ul>
    <li class="user-nav-link">
        <button class="user-nav-btn active">Dashboard</button>
    </li>
    <li class="user-nav-link">
        <button class="user-nav-btn">Storico acquisti</button>
    </li>
    <li class="user-nav-link">
        <button class="user-nav-btn">Impostazioni utente</button>
    </li>
</ul>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/progettoweb21/laraProject/resources/views/includes/usernavbar/user-nav.blade.php ENDPATH**/ ?>