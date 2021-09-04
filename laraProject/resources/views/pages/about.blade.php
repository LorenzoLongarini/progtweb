@extends('layouts.public')

@section('page-title', 'Chi siamo')

@section('page-content')

@include('helpers/cover-page', [
        'title' => 'Chi siamo', 
        'description' => 'Tutte le informazioni di cui hai bisogno per contattarci o per assistenza',
        'img_url' => '../storage/app/public/images/covers/about-cover.jpg'])

<div class="about-container">
        <div class="about-desc">
                <h3 class="desc-title">Benvenuto nel sito web di DL Computers!</h3>
                <div class="text-desc">
                        <p>Ci occupiamo di assistenza tecnica post vendita per la telefonia mobile, l’audio video e prodotti IT.
                                 La nostra esperienza nel settore, le tecnologie avanzate di cui ci avvaliamo e il nostro team di
                                  tecnici ci permettono di offrire servizi di altissima qualità, come la riparazione veloce di smartphone,computer
                                   e altri dispositivi.
                                   
                        </p>

                </div>
                <h3 class="desc-title" style="text-decoration: none;font-size:25px">Missione,Visione,Valori</h3>
                <div class="text-desc">
                        <p>ha sempre messo la soddisfazione del cliente come priorità. Per questo motivo, la nostra Missione aziendale è quella 
                                d’accorciare la distanza fra centro d’assistenza e il cliente, cercando di semplificare ogni sua problematica.
                                Per poter rendere questo possibile, abbiamo come Visione quella di offrire ai clienti un servizio d’assistenza 
                                impeccabile ed efficiente, basato sulla innovazione tecnologica e l’ascolto del cliente. Tutto nell’ottica di 
                                rispondere alle esigenze di costante crescita del settore dell’elettronica di consumo.
                                Infine, niente di questo potrebbe essere possibile senza tener conto, per ogni decisione, dei valori su cui si basa
                                 la nostra azienda: Esperienza, Tecnologia ed Empatia. Questi tre valori ci permettono di eseguire il servizio che 
                                 abbiamo sempre desiderato, rapido, affidabile e soprattutto duraturo nel tempo.
                                   
                        </p>

                </div>
                <h3 class="desc-title" style="text-decoration: none;font-size:25px">I nostri centri assistenza</h3>
                <div class="text-desc" style="text-align: center;justify-content:space-between">
                      
                        <p>
                                visita la nostra pagina per trovare il centro assistenza più vicino a te.
                                I nostri centri sono presenti in tutto il paese!
                        </p>
               
                        <div style="margin-top:20px"><a class="centri-link" href="{{route('centri')}}"><h4 style="font-size:30px">CENTRI ASSISTENZA</h4></a></div>

                </div>
                <h3 class="desc-title" style="text-decoration: none;font-size:25px">Contattaci</h3>
                <div class="text-desc" style="text-align: center;justify-content:space-between">
                      
                        <p>
                               Contattaci per un appuntamento con i nostri tecnici o per avere ulteriori informazioni. Siamo disponibili H24!

                        </p>
               
                        <div class="contatti">
                                <div class="item-contatti" style="display:flex;align-items:center;flex-direction:column"> 
                                       <div> <h3>Numero di telefono</h3> </div>
                                        <div><h3>0721-494589</h3> </div>

                                </div>
                                <div class="item-contatti" style="display:flex;align-items:center;flex-direction:column">
                                        <div><h3>E-mail</h3> </div> 
                                        <div><h3>info@dlcomputers.it</h3> </div>
                                </div>
                        </div>
                </div>


        </div>
       
</div>

@endsection

