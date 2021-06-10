@php
use App\Models\Enums\Quantita;
use App\Models\Enums\Pagamento;
@endphp

@extends('layouts.forms')
@section('page-content')
    <div class = "contienitutto">
    <div display="flex" justify-content="center">
        <div class="cont-riepilogo">
        <div class = "row-direction">
        <img src="./img/shopping-cart.svg" style="width:2.5%" hspace="10"><span style="font-weight:bolder"> RIEPILOGO
        
       
        
        
        </div>
    </div>
    
    <div class = "pagamento-line"></div>
    <br>
                    <div class = "row-direction" >
                    <div class="img-event immagine-distance">
                    @include('helpers.img-event', ['imgName' => $pagamento->imgName])
                    </div>

                    <div class="event-info flex-columns" style="margin-top:10px">
                        <h2>{{$pagamento->titolo}}</h2>
                        <h4>{{$pagamento->data}}</h4>
                        <h4>{{$pagamento->luogo}}</h4>
                        </div>
                <div class="event-right right-distance">
                    <h4 class="price"> {{$pagamento->prezzo}} € </h4>
                </div>
                
</div>
<div class = "pagamento-line"></div>
    <div class = "row-direction">
    {{--@if(($pagamento->sconto)=== 0)
    <div class = "dim-prezzo-mod">><h4>{{$pagamento->prezzo}} €</h4></div>
    @else
    <div class = "dim-prezzo-mod"><h4>{{$pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto))}} €</h4></div>
    @endif --}}
    </div>
    <div class = "row-direction">
    <h3 class="notice quant-dim">
    @if(($pagamento->sconto)=== 0)
    Nessuno sconto applicato
    @else
            Applicato sconto last-minute del {{$pagamento->sconto}}%
    @endif
            </h3>
            @if(($pagamento->sconto)=== 0)
            <div class = "dim-prezzo-mod2"><h4 style = "color:red; margin-left:85px; font-size:25px">{{$pagamento->prezzo}} €</h4></div>
            @else
            <div class = "dim-prezzo-mod2" id = "prezzo-scontato"><span><h4 style = "color:red; margin-left:85px; font-size:25px">{{round($pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto)),2)}} €</h4></span></div>
            @endif  
    </div>
    
    <div>
   
    </div>
    <div class = "pagamento-line"></div>
        <div class = "row-direction">
        
        <div class= "quant-dim">Totale</div>
        @if(($pagamento->sconto)=== 0)
            <div class = "dim-prezzo-mod2"><h4 style = " margin-left:85px; font-size:25px">{{$pagamento->prezzo}} €</h4></div>
            @else
        <div class = "dim-prezzo-mod3" id = "prezzo-tot"><span><h4 style = " margin-left:85px; font-size:25px">{{round($pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto)),2)}} €</h4></span></div>
        @endif
        </div>
</div>
    <div class = "pagamento-line-v"></div>
    <div>
    <div class ="form-pagamento">
    <div class = "row-direction">
    {{  Form::open(array('route' => ['pagamento.store', $pagamento->eventoId], 'id' =>'pagamento-form' , 'files' => true))  }}
        <img src="./img/credit-card.svg" style="width:8%" hspace="20">
        <div style="margin-top: 8px"> <span style="font-weight:bolder"> Metodo di pagamento</div>
    </div>
    <div class = "quant-dim">
                Quantità
            </div>
            <div class="quant-dim">
            {{  Form::select ('quantità', array(1,2,3,4,5,6,7,8,9,10), null, ['id' => 'price-id'] )}}
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
            {{  Form::select ('modalità', Pagamento::mod_pagamento )}} 
            
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
{{  Form::submit ('Acqusita', ["class" => "default-btn", "id" => "search-btn"])}}
</div>   
</div>
{{Form::close()}}
    </div>
    </div>
    </div>
@endsection

@section('js-scripts')
<script>
    $('#price-id').change(function () {
        let prezzo_totale = $('#prezzo-scontato').text() * $(this).children("option:selected").val();
        $('#prezzo-tot span').text(Math.round(prezzo_totale*100)/100);
    });
    $(".dropdown").click(function () {
        $(".dropdown-nav").toggle();  
    });
</script>
@endsection
