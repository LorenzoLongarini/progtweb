@php
use App\Models\Resources\Faq;
$faqs = FAQ::all();
@endphp

<div id="faq-section" class="form">
<div class="add-faq">
 
    <h2>Aggiungi una domanda</h2><button class="default-btn">Aggiungi Faq</button>
</div>
<div class="faq-content">
@isset($faqs)
    @foreach($faqs as $faq)
    <div class="faq-item">
        <h2> {{$faq->domanda}} </h2>
        <p> {{$faq->risposta}}</p>
        <button class="default-btn">Modifica</button>
        <button class="default-btn">Elimina</button>
    @endforeach
    @endisset
    @empty($faqs)
        <h2>Niente da visualizzare</h2>
    @endempty
</div>

</div>
