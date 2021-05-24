@extends('layouts.public')

@section('page-title', 'FAQ')

@section('content')

@include('helpers/cover-page', [
        'title' => 'FAQ - Frequently asked question', 
        'description' => 'Domande frequenti sui contenuti venduti e le modalità di acquisto',
        'url' => 'faq-cover.jpg'])

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
