@can('isAdmin')
<ul>
    <li class="user-nav-link">
        <button id="prodotti" class="user-nav-btn active">Prodotti</button>
    </li>
    <li class="user-nav-link">
        <button  id="malf" class="user-nav-btn">Malfunzionamenti</button>
    </li>
    <li class="user-nav-link">
        <button  id="staff" class="user-nav-btn">Staff</button>
    </li>
    <li class="user-nav-link">
        <button  id="tecnici" class="user-nav-btn">Tecnici</button>
    </li>
    <li class="user-nav-link">
        <button  class="user-nav-btn">Gestione Reparti</button>
    </li>
    <li class="user-nav-link">
        <button  class="user-nav-btn">Centri assistenza</button>
    </li>
    
    
</ul>
@endcan
@can('isTecn')
<ul>
    <li class="user-nav-link">
        <button id="prodotti" class="user-nav-btn active">Dati Personali</button>
    </li>
    <li class="user-nav-link">
        <button  id="malf" class="user-nav-btn">Lista Prodotti</button>
    </li>
   

</ul>
@endcan
@can('isStaff')
<ul>
    <li class="user-nav-link">
        <button id="prodotti" class="user-nav-btn active">Dati Personali</button>
    </li>
    <li class="user-nav-link">
        <button  id="malf" class="user-nav-btn">Malfunzionamenti</button>
    </li>
    
    
    
</ul>
@endcan

