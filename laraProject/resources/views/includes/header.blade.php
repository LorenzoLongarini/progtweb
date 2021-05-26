<header id="masthead">
    <div class="container">
        <div id="left-header">
            <img id="site-logo" src="{{ asset('/images/logos/eticket_logo.svg')}}" alt="Easyticket logo">
            <div class="divider"></div>
            <nav id="main-menu">
                <ul>
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('catalog')}}">CATALOGO</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about')}}">CHI SIAMO</a>
                    </li>
                </ul>
            </nav>  
        </div>
        <div id="right-header">   
            <div id="search-icon" class="link-icon" title="Cerca nel catalogo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>

            <div id="theme-toggle" class="link-icon" title="Toggle per il tema chiaro/scuro">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                </svg> 
            </div>
            
            <div class="login">
                <a href="#" class="login link-icon" title="Accedi al tuo account">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                  <span>Accedi/Registrati</span> 
                </a>    
            </div>
        </div>
    </div>
</header>