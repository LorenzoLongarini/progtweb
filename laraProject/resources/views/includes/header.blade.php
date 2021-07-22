
<header id="masthead">
    <div class="container"> 
        <div id="left-header">      
            <img id="site-logo-header" src="{{ asset('/images/logos/logo-sito.svg')}}" alt="Easyticket logo">
            <div class="divider"></div>
            <nav id="main-menu">
                <ul>
                    <li>
                        <a class="nav-link" >HOME</a>
                    </li>
                    <li>
                        <a class="nav-link" >CATALOGO</a>
                    </li>
                    <li>
                        <a class="nav-link" >CHI SIAMO</a>
                    </li>
                </ul>
            </nav>  
        </div>
        <div id="right-header">   
         
            @include('includes.widgets.search-catalog', ["searchBtn" => $searchBtn])

            @if($authBtn == true)
                @include('includes.widgets.auth')
            @endif
        </div>
    </div>
</header>
