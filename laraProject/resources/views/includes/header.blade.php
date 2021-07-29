
<header id="masthead">
    <div class="container"> 
        <div id="left-header">      
            <img id="site-logo-header" src="{{ asset('/images/logos/logo-sito.svg')}}" alt="Easyticket logo">
            <div class="divider"></div>
            <nav id="main-menu">
                <ul>
                    <li>
                        <a class="nav-link" href="{{route('home')}}"  >HOME</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('catalogo')}}">CATALOGO</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('about')}}" >CHI SIAMO</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('centri')}}" >CENTRI ASSISTENZA</a>
                    </li>
                </ul>
            </nav>  
        </div>
        <div id="right-header">   
            @if($authBtn == true)
                @include('includes.widgets.auth')
            @endif
        </div>
    </div>
</header>
