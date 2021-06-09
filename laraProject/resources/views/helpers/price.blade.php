@php 
    $prezzoScontato = $evento->sconto > 0;
    $nuovoPrezzo = $evento->prezzo;

    if($prezzoScontato)
        $nuovoPrezzo -= ($nuovoPrezzo * $evento->sconto) / 100;

@endphp

@if($prezzoScontato)
    <h4 class="price"> <del>€ {{ $evento->prezzo }} </del>€ {{ round($nuovoPrezzo, 2) }}</h4>
@else
    <h4 class="price ">€ {{ $nuovoPrezzo }}</h4>
@endif

