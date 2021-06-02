@section('content')
    <div class = "contienitutto">
    <div display="flex" justify-content="center">
        <div class="cont-riepilogo">
        <div class = "row-direction">
        <img src="./img/shopping-cart.svg" style="width:2.5%" hspace="10"><span style="font-weight:bolder"> RIEPILOGO
        
        <a class = "elimina">Elimina Ordine <img src="./img/trash-2.svg" style="width:10%"> </a>
        
        
        </div>
    </div>
    
    <div class = "pagamento-line"></div>
    <br>
                    <div class = "row-direction" >
                    <div class="img-event immagine-distance">
                        <h3>Immagine</h3>
                    </div>

                    <div class="event-info flex-columns" style="margin-top:10px">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                        </div>
                <div class="event-right right-distance">
                    <h4 class="price">€ 32,90</h4>
                </div>
                
</div>
<div class = "pagamento-line"></div>
    <div class = "row-direction">
    <div class = "quant-dim">
        Quantità
    </div>
    <div class="quant-dim">
            <select >
            <option value="">----</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            </select>
    </div>
    <div class = "dim-prezzo-mod">Prezzo Modificato</div>
    </div>
    <div class = "row-direction">
    <h3 class="notice quant-dim">
    Applicato sconto last-minute del 15%
            </h3>
            <div class = "dim-prezzo-mod2">Prezzo Modificato</div>
    </div>
    <div class = "pagamento-line"></div>
        <div class = "row-direction">
        <div class= "quant-dim">Totale</div>
        <div class = "dim-prezzo-mod3">Prezzo Modificato</div>
        </div>
</div>
    <div class = "pagamento-line-v"></div>
    <div>
    
    <div class ="form-pagamento">
    <div class = "row-direction">
        <img src="./img/credit-card.svg" style="width:8%" hspace="20">
        <div style="margin-top: 8px"> <span style="font-weight:bolder"> Metodo di pagamento</div>
    </div>
            <br>
            <div>
            <label class="esempio-form" for="nome-tit">Nome Titolare</label><br>
            <input class="esempio-form" id = "nome-tit" type="text"  value="" maxlength="20" rows="1" >
            </div>
            <br>
            <label class="esempio-form" for="cognome-tit">Cognome Titolare</label><br>
            <input class="esempio-form" id = "cognome-tit" type="text" value="" maxlength="20" rows="1">
            </br>
            <br>
            <label class="esempio-form" for="codice">Codice</label><br>
            <input class="esempio-form" id = "codice" type="text" value="" maxlength="20" rows="1">
            <br>
            <label class="esempio-form">Carta</label><br>
            <input class="esempio-form" id = "carta" type="radio"><img src="./img/payments_icon/visa_logo.svg" style="width:10%">
            <input class="esempio-form" id = "carta" type="radio"><img src="./img/payments_icon/maestro_logo.svg" style="width:10%">
            <input class="esempio-form" id = "carta" type="radio"><img src="./img/payments_icon/mastercard_logo.svg" style="width:10%">
            <br>
            <label class="esempio-form" for="card-number-area">Numero Carta</label><br>
            <input class = "esempio-form" type="text" id="card-number-area" maxlength="19" rows="1" size="19" placeholder="XXXX-XXXX-XXXX-XXXX"></input>
            <br>
            <div class = "row-direction">
            <label class="esempio-form" for="card-expiration-date">CVV</label>
            <label class="esempio-form" for="card-security-code" style="margin-left:80px">Scadenza</label>
            </div>  
            <div class = "row-direction">
            <input class = "esempio-form" type="text" id="card-expiration-date" maxlength="5" size ="2" rows="1" placeholder="XX/XX"></input>
            <input style = "margin-left:0px" class = "esempio-form" type="text" id="card-security-code" maxlength="3" size="2" rows="1" placeholder="XXX"></input>
            </div>
<br>
            <button class="btn default-btn" style="margin-left:120px">Acquista</button>
</div>
    </div>
    </div>
    </div>
        
@endsection