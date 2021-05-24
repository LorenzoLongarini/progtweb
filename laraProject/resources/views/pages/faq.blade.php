@extends('layouts.public')

@section('page-title', 'FAQ')

@section('content')

@include('helpers/cover-page', [
        'title' => 'FAQ - Frequently asked question', 
        'description' => 'Domande frequenti sui contenuti venduti e le modalità di acquisto',
        'url' => 'faq-cover.jpg'])

@isset($faqCollection)
    <div class="container flex-columns">
        @foreach($faqCollection as $faq)
            <h2>{{ $faq->domanda }}</h2>
            <h2>{{ $faq->risposta }}</h2>
            <br>
        @endforeach
    </div>
@endisset

@empty($faqCollection)
    <h1>Niente da visualizzare</h1>
@endempty

@endsection
