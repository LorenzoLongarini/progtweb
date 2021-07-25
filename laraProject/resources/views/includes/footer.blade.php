<footer>
    <div class="container flex-columns flex-center">
          <div class="block">
            <img src="{{asset ('/images/logos/text2020.svg')}}" width="400px" height="auto"/>
          </div>
          <div class="block">
            <ul class="footer-links">
              <li><a href="{{ route('catalogo') }}">Catalogo</a></li> 
              <li><a href="{{ route('faq') }}">FAQ</a></li>
              <li><a href="{{ route('privacy') }}">Privacy & GDPR</a></li>
              <li><a href="{{ route('termini-e-condizioni') }}">Termini d'uso</a></li>
              <li><a href="{{ route('about') }}">Contatti</a></li>
            </ul>
          </div>
        <div class="site-info">
            <h4>&copy; {{ date('Y') }} DL Computers S.r.l. | P.IVA 0120100011</h4>
        </div>
    </div>
</footer>