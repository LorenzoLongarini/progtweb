@extends('/layouts.public')

@section('page-title', 'Chi siamo')

@section('page-content')

@include('helpers/cover-page', [
        'title' => 'Chi siamo', 
        'description' => 'Tutte le informazioni di cui hai bisogno per contattarci o per assistenza',
        'img_url' => '../storage/app/public/images/covers/about-cover.jpg'])


@section('descrizione')
<h1 style="margin-left:100px;margin-top:20px">Perchè e-tickets?</h1>
<div style="display: flex;flex-direction:column;align-items:center;font-size:20px;margin-top:100px">
        <div>
<p>
        e-ticket nasce come  piattaforma di e-commerce,facile e intuitiva,per eventi di musica e spettacolo.<br>
        Nel tempo la piattaforma si è estesa perfezionando e aggiungendo servizi in grado di soddisfare ogni esigenza del cliente.<br>
        Attualmente offre offre un pacchetto di sistemi e servizi  indispensabili per l’organizzazione e la gestione dei tuoi eventi:<br>

</p>
<div style="display: flex;justify-content:center;font-size:17px;text-align:center;gap:20px;margin-top:30px">
        <div>
<h2>Vendita B2C</h2>

<p style="margin-top:20px">Oltre a porsi come partner ideale<br> per 
        la realizzazione di eventi, <br>
        e-tickets è sempre più attenta <br>
        alla vendita diretta al consumatore.<br>
        La rete e-tickets coniuga la grande <br>
        esperienza  maturata nella vendita dei biglietti<br>
        e nella gestione delle differenti tipologie di accessi,<br>

         per supportare al meglio gli organizzatori
         di manifestazioni<br>  che scelgono di affidarsi a e-tickets
         per la vendita B2C.<br>

         e-tickets fonda il servizio<br>
          di vendita B2C su numerosi punti di forza,<br>
           che lo rendono solido e performante.<br>
</p>
</div>
<div>
<h2>Servizi Staffing</h2>
<p style="margin-top:20px">
        offre un servizio di staffing di alto livello,<br>grazie alle numerose sedi operative 
        <br>distribuite su tutto il territorio nazionale.<br>
        Puoi contare su un sito totalmente personalizzabile,<br> sulla possibilità di creare promozioni,<br>esperienze e pacchetti personalizzati,<br>
        su un a rete di punti vendita <br>distribuita su tutto il territorio nazionale<br> e modulabile in base alle tue esigente, <br>su una vasta base clienti e su un supporto<br>
        e su un supporto professionale alla tua comunicazione.<br>
        

</p>
</div>
</div>
</div>
</div>
<h1 style="margin-left:100px;margin-top:100px">La nostra storia</h1>
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
              <time>Maggio 2021</time><p class="p">Mich modifica il css di tutti.</p>
            </div>
          </li>
          <li>
            <div>
              <time>Giugno 2021</time><p class="p">La piattaforma E-TICKETS viene pubblicata</p>
            </div>
          </li>
          <li>
            <div>
              <time>Luglio 2021</time> <p class="p"> diventa la piattaforma N.1 di e-commerce <br>per eventi musicali.</p>
              </div>
            </li>
          
          
        </ul>
      </section>

<h1 style="margin-left:100px;margin-top:100px">Sei un organizzatore?</h1>
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
      <script>
             
(function () {
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
      if (isElementInViewport(elems[i])) {
        elems[i].classList.add("in-view");
      }
    }
  }

  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
        })();
      </script>
      
      
      
@endsection

@endsection
