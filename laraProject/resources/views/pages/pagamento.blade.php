@extends('layouts.public')
@section('page-content')
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
    
    <div class = "dim-prezzo-mod">{{$pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto))}} €</div>
    </div>
    <div class = "row-direction">
    <h3 class="notice quant-dim">
    Applicato sconto last-minute del {{$pagamento->sconto}}%
            </h3>
            <div class = "dim-prezzo-mod2">{{$pagamento->prezzo - ($pagamento->prezzo / (100/$pagamento->sconto))}} €</div>
    </div>
    <div class = "pagamento-line"></div>
        <div class = "row-direction">
        <div class= "quant-dim">Totale</div>
        <div class = "dim-prezzo-mod3">Prezzo Modificato</div>
        </div>
</div>
    <div class = "pagamento-line-v"></div>
    <div>
    @section('form')
    @include('inserts.pagamento-form')
@endsection
<br>
{{ link_to_route('acquisto', 'Acquista', $parameters = ['id' => $pagamento->eventoId], $attributes = ['class' => 'btn default-btn' , 'style'=>'margin-left:120px'])}}
           
</div>
    </div>
    </div>
    </div>
        
@endsection