@extends('layouts.root')

@section('page-content')

<div class="hero flex-center"> 
    <div class="container flex-rows">
        <div class="content-hero">
           <h2>FAQ - Frequently asked questions</h2>
            <h3>Prova a cercare qui le risposte alle tue esigenze prima di contattarci.</h3>
        </div>
    </div>
</div>

@isset($faqs)
    <div class="container flex-columns">
        @foreach($faqs as $faq)
            <h2>{{ $faq->domanda }}</h2>
            <h2>{{ $faq->risposta }}</h2>
            <br>
        @endforeach
    </div>
@endisset

@empty($faqs)
    <h1>Niente da visualizzare</h1>
@endempty

@endsection
