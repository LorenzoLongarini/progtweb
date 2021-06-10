 <div id="auth-btn" class="login header-link-icon" title="Accedi o registrati">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                @auth
                <a class="login dropdown">Ciao,{{Auth::user()->nome}}</a>
            <div style="display:none" class="dropdown-nav">
                <ul> 
                    <div>
                    <li>
               
                    <a title="Esci dal sito" class="login" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <span>Logout</span>
                    </a> 
                    </li>
                </div>
              
                <div>

                    <li>
                       @can("isAdmin")     
                       <a href="{{route('admin')}}"  class="login area-utente ">Area utente</a>
                       @endcan
                       @can("isClient")     
                       <a href="#" class="login area-utente ">Area utente</a>
                       @endcan
                       @can("isOrganiz")     
                       <a href="#"  class="login area-utente">Area utente</a>
                       @endcan
                    </li>
                
                </div>
            </ul>
        </div>
        </div>
                @endauth
                @guest
                    <a href="{{route('login')}}" class="login" title="Accedi al tuo account">
                        <span>Accedi</span> 
                    </a>  
                @endguest                 
            </div>