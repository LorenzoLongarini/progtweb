
<header id="masthead">
    <div class="container"> 
        <div id="left-header">      
            <img id="site-logo-header" src="{{ asset('/images/logos/eticket_logo.svg')}}" alt="Easyticket logo">
            <div class="divider"></div>
            <nav id="main-menu">
                <ul>
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('catalogo')}}">CATALOGO</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about')}}">CHI SIAMO</a>
                    </li>
                </ul>
            </nav>  
        </div>
        <div id="right-header">   
            @if($searchBtn == true)
                @include('includes.widgets.search-catalog', ["searchBtn" => $searchBtn])
            @endif

            @if($toggleThemeBtn == true)
                @include('includes.widgets.theme-toggle')
            @endif

            @if($authBtn == true)
                @include('includes.widgets.auth')
            @endif
        </div>
    </div>
</header>
