
    
    {{  Form::open(array('route' => ['catalogo']))  }}
    <div class="multiple-input">
    

        <div class="wrap-input">
            {{  Form::text ('descrizione', null, array('placeholder' => 'Descrizione'),["class" => "search-desc"])}}
        </div>
        
        <div id="qm-icon">
            <div id="icon-btn"><img class="img-qm"id="img" src="{{ asset('/images/qm-icon.png')}}" alt=""></div>
            
            <div id="win-tutorial" class="w-tutorial">
                <div class="text-tutorial">
                    <div class="win-title"><h2 class="title-text">TUTORIAL RICERCA PER DESCRIZIONE</h2></div>
                    <div class="cont-win-t">
                    <p class="tutorial-text-win">
                        La ricerca viene effettuata per descrizione del prodotto ed è possibile trovare il/i prodotto/i desiderato/i utilizzando due diversi metodi:<br>
                        <ul class="list-text">
                            <li>Indicando una parola <b>totale</b>, la ricerca riporterà i prodotti che contengono tale parola nella descrizione.</li><br>
                            <li>Indicando una parola <b>parziale</b> seguita dal simbolo '*',la ricerca riporterà i prodotti che contengono nella descrizione parole che contengono, a loro volta,la parola inserita. </li>
                        </ul>
                    <br>
                    
                    </p>
                    <p class="staff-win"><b>Nota:</b>  l'utente <b>Staff</b> potrà modificare o eliminare solo i prodotti associati alla propria sottocategoria</p>
                </div>
                </div>
            </div>

        </div>
        <div id="button-input" class="wrap-input">
            {{  Form::submit ('Cerca', ["class" => "default-btn", "id" => "search-btn"])}}
        </div>
    
    </div>
{{Form::close()}}
<script>
let btn=document.getElementById("img");
 let win=document.getElementById("win-tutorial");
 btn.onclick=function(){
     win.style.display="block";
 }
 window.onclick=function(event){
     if(event.target==win){
         win.style.display="none";
     }
 }
</script>


