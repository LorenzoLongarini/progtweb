@extends('layouts.public')

@section('page-title', 'Chi siamo')

@section('page-content')

@include('helpers/cover-page', [
        'title' => 'Chi siamo', 
        'description' => 'Tutte le informazioni di cui hai bisogno per contattarci o per assistenza',
        'img_url' => '../storage/app/public/images/covers/about-cover.jpg'])

<div class="container"> 
  <h1 class="title">Perchè Easytickets?</h1>  
  <p style="font-size:18px">EasyTickets nasce come  piattaforma di e-commerce,facile e intuitiva,per eventi di musica e spettacolo.
      Nel tempo la piattaforma si è estesa perfezionando e aggiungendo servizi in grado di soddisfare ogni esigenza del cliente.
      Attualmente offre offre un pacchetto di sistemi e servizi  indispensabili per l’organizzazione e la gestione dei tuoi eventi:
  </p>

  <ul style="padding-left: 20px">
    <li>
      <h2 class="title">Vendita B2C</h2>
      <p>Oltre a porsi come partner ideale per la realizzazione di eventi, Easytickets è sempre più attenta alla vendita diretta al consumatore.
        La rete Easytickets coniuga la grande esperienza  maturata nella vendita dei biglietti e nella gestione delle differenti tipologie di accessi,
        per supportare al meglio gli organizzatori di manifestazioni che scelgono di affidarsi a EasyTickets per la vendita B2C.
        Easytickets fonda il servizio di vendita B2C su numerosi punti di forza, che lo rendono solido e performante.
      </p>
    </li>
    <li>
      <h2 class="title">Servizi Staffing</h2>
      <p>Offre un servizio di staffing di alto livello, grazie alle numerose sedi operative distribuite su tutto il territorio nazionale.
        Puoi contare su un sito totalmente personalizzabile, sulla possibilità di creare promozioni,esperienze e pacchetti personalizzati,
        su un a rete di punti vendita distribuita su tutto il territorio nazionale e modulabile in base alle tue esigente, su una vasta base clienti e su un supporto
        e su un supporto professionale alla tua comunicazione.
      </p>
    </li>
  </ul>

  <h1 class="title" style="margin-top: 70px">La nostra storia</h1>
  <section style="margin-top: 50px" class="timeline">
    <ul>
      <li>
        <div>
          <time>Aprile 2021</time><p class="p">Nasce l'idea di creare una piattaforma di biglietteria,informazione e commercio elettronico<br> di eventi musicali.</p> 
        </div>
      </li>
      <li>
        <div>
          <time>Maggio 2021</time><p class="p">Un team di sviluppatori si occupa della realizzazione nel dettaglio del progetto</p>
        </div>
      </li>
      <li>
        <div>
          <time>Maggio 2021</time><p class="p">Mich modifica il css di tutti(perché sono ossessivo compulsivo).</p>
        </div>
      </li>
      <li>
        <div>
          <time>Giugno 2021</time><p class="p">La piattaforma EasyTickets viene pubblicata</p>
        </div>
      </li>
      <li>
        <div>
          <time>Luglio 2021</time> <p class="p"> diventa la piattaforma N.1 di e-commerce <br>per eventi musicali.</p>
          </div>
        </li>
    </ul>
  </section>

<h1 id="lavora-con-noi">Sei un organizzatore?</h1>
<div style="display:flex;align-items:center;justify-content:center;gap:50px;margin-top:100px">
        <div class="recap" >
                <h2>Contattaci al numero</h2>
                <h2 id="n-tel">3756452001</h2>
        </div>
        <div class="recap">
                <h2>Scrivici all'indirizzo</h2>
                <h2 id="n-tel">info@etickets.it</h2>

        </div>
</div>
@endsection

@section('js-scripts')
  <script>
    var elems = document.querySelectorAll(".timeline li");

    function isElementInViewport(elem) {
      var rect = elem.getBoundingClientRect();
      return (
        rect.top >= 0 && rect.left >= 0 &&rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) 
        && rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function callbackFunc() {
      for (var i = 0; i < elems.length; i++) {
        if (isElementInViewport(elems[i]))
          elems[i].classList.add("in-view");
      }
    }

    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
  </script>
@endsection
