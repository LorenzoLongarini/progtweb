{{  Form::open(array('route' => 'pagamento.store', 'id' =>'pagamento-form' , 'files' => true))  }}
        <img src="./img/credit-card.svg" style="width:8%" hspace="20">
        <div style="margin-top: 8px"> <span style="font-weight:bolder"> Metodo di pagamento</div>
    </div>

            <br>
            <div>
            <label class="esempio-form" for="nome-tit">Nome Titolare</label><br>
            <input class="esempio-form" id = "nome-tit" type="text"  value="" maxlength="20" rows="1" style="width: 70%">
            </div>
            <br>
            <label class="esempio-form" for="cognome-tit">Cognome Titolare</label><br>
            <input class="esempio-form" id = "cognome-tit" type="text" value="" maxlength="20" rows="1" style="width: 70%">
            </br>
            <br>
            <label class="esempio-form" for="codice">Codice</label><br>
            <input class="esempio-form" id = "codice" type="text" value="" maxlength="20" rows="1" style="width: 70%" >
            <br>
            <label class="esempio-form">Seleziona Metodo di pagamento</label><br>
             {{Form::radio('tipo','Prepagata', 'true') }} 
             {{Form::radio('tipo','Criptovaluta', 'false') }} 
             {{Form::radio('tipo','Paypal', 'false') }}  
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
            <div class = "quant-dim">
                Quantità
            </div>
            <div class="quant-dim">
            {{  Form::text ('quantità', '' /*class-type*/)  }}
            </div>
            
            </div>

            {{Form::close()}}
          
        