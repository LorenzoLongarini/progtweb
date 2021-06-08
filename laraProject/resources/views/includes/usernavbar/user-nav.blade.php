
@can('isAdmin')
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
@endcan
@can('isOrganiz')
<ul>
    <li class="user-nav-link">
        <button class="user-nav-btn active">Dashboard</button>
    </li>
    <li class="user-nav-link">
        <button class="user-nav-btn">Eventi</button>
    </li>
</ul>
@endcan

@can('isClient')
<ul>
    <li class="user-nav-link">
        <button class="user-nav-btn active">Dashboard</button>
    </li>
    <li class="user-nav-link">
        <button class="user-nav-btn">Storico acquisti</button>
    </li>
    <li class="user-nav-link">
        <button class="user-nav-btn" id = "client-modify">Impostazioni utente</button>
    </li>
</ul>
@endcan