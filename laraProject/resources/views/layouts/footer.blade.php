<footer>
    <div class="container flex-columns flex-center">
          <div class="block">
            <img src="{{asset ('/images/logos/eticket_logo.svg')}}" width="220px" height="auto"/>
          </div>
          <div class="block">
            <ul class="footer-links">
              <li><a href="#">FAQ</a></li>
              <li><a href="{{ route('about') }}">Contatti</a></li>
              <li><a href="{{ route('privacy') }}">Privacy policy e GDPR</a></li>
              <li><a href="{{ route('termini-e-condizioni') }}">Termini d'uso</a></li>
              <li><a href="{{ route('lavora-con-noi') }}">Lavora con noi</a></li>
            </ul>
          </div>
        <div class="site-info">
            <h4>&copy; <?php echo date('Y')?> EasyTicket S.r.l.</h4>
        </div>
    </div>
</footer>