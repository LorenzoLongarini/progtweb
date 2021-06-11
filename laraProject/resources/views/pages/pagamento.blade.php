@php
use App\Models\Enums\Quantita;
use App\Models\Enums\Pagamento;
@endphp

@extends('layouts.forms')
@section('page-content')
    <div class = "contienitutto pagamento-div">
    <div display="flex" justify-content="center">
    <div><a href= {{route('catalogo')}}> Torna al Catalogo </a></div>
       <br>
        <div class="cont-riepilogo">
        <div class = "row-direction">
       
        <span style="font-weight:bolder"> <h2>RIEPILOGO</h2>
        
       
        
        
        </div>
    </div>
    
    <div class = "pagamento-line"></div>
    <br>
                    <div class = "row-direction" >
                    <div class="img-event-pagamento immagine-distance">
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
            <div class = "dim-prezzo-mod2"><h4 style = "color:red; margin-left:80px; font-size:25px">{{$pagamento->prezzo}} €</h4></div>
            @else
            <div class = "dim-prezzo-mod2" id = "prezzo-scontato"><h4 style = "color:red; margin-left:80px; font-size:25px"><span>{{round($pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto)),2)}}</span> €</h4></div>
            @endif  
    </div>
    
    <div>
   
    </div>
    <div class = "pagamento-line"></div>
        <div class = "row-direction">
        
        <div class= "quant-dim"><h2>Totale</h2></div>
        @if(($pagamento->sconto)=== 0)
            <div class = "dim-prezzo-mod3"><h4 style = " margin-left:55px; font-size:25px"><span>{{$pagamento->prezzo}} </span> €</h4> </div>
            @else
            
        <div class = "dim-prezzo-mod3" id = "prezzo-tot"><h4 style = " margin-left:55px; font-size:25px"> <span> {{round($pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto)),2)}} </span>€</h4></div> 
        
        
        @endif
        </div>
</div>
    <div class = "pagamento-line-v"></div>
    <div>
    <div class ="form-pagamento">
    <div class = "row-direction">
    {{  Form::open(array('route' => ['pagamento.store', $pagamento->eventoId], 'id' =>'pagamento-form' , 'files' => true))  }}
        
        <div style="margin-top: 20px; margin-left:30px"> <span style="font-weight:bolder"><h2> Inserisci i tuoi dati</h2></div>
    </div>
   
            <div class = "multiple-input">
            <div >
            <label class="esempio-form">Quantità</label><br>
            {{  Form::select ('quantità', array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10), null, ['id' => 'price-id', 'style'=>'width:70%; margin-left:30px'] )}}
            </div>
           <div style = "margin-left:80px;">
            <label class="esempio-form">Metodo di pagamento</label><br>
            {{  Form::select ('modalità', Pagamento::mod_pagamento, ['style'=>'width:70%'])}} 
            </div>
            </div>
            <div class = "multiple-input">
            <div>
            <label class="esempio-form" for="nome-tit">Nome Titolare</label><br>
            <input class="esempio-form" id = "nome-tit" type="text"  value="Tuo Nome" maxlength="20" rows="1" style="width: 70%">
            </div>
            <br>
            <div>
            <label class="esempio-form" for="cognome-tit">Cognome Titolare</label><br>
            <input class="esempio-form" id = "cognome-tit" type="text" value="Tuo Cognome" maxlength="20" rows="1" style="width: 70%">
            </div>
            </div>
            
            
            <div class = "multiple-input">
            <div>
            <label class="esempio-form" for="codice">Codice</label><br>
            <input class="esempio-form" id = "codice" type="text" value="Tuo Codice" maxlength="20" rows="1" style="width: 70%" >
            </div>
            <div>
            <label class="esempio-form" for="card-number-area">Numero Carta</label><br>
            <input class = "esempio-form" type="text" id="card-number-area" maxlength="19" rows="1" size="19" placeholder="XXXX-XXXX-XXXX-XXXX" style="width: 70%"></input>
            </div>
            </div>
            <br>
            <div class = "row-direction" style = "margin-left:80px">
            <label class="esempio-form" for="card-expiration-date">CVV</label>
            <label class="esempio-form" for="card-security-code" style="margin-left:60px">Scadenza</label>
            </div>  
            <div class = "row-direction" style = "margin-left:80px">
            <input class = "esempio-form" type="text" id="card-expiration-date" maxlength="5" size ="2" rows="1" placeholder="XX/XX" style="width: 25%" ></input>
            <input style = "margin-left:0px; width:25%" class = "esempio-form" type="text" id="card-security-code" maxlength="3" size="2" rows="1" placeholder="XXX" ></input>
        
            
            </div>

           
    
<br>
{{  Form::submit ('Acquista', ["class" => "default-btn", "id" => "search-btn", "style"=>"width:50%; margin-left:100px;"])}}
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
        let prezzo_totale = $('#prezzo-scontato h4 span').text() * $(this).children("option:selected").val();
        $('#prezzo-tot h4 span').text(Math.round(prezzo_totale*100)/100);
    });
    $(".dropdown").click(function () {
        $(".dropdown-nav").toggle();  
    });
</script>
@endsection
