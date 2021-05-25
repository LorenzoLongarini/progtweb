@extends('layouts.public')

@section('page-title', 'FAQ')

@section('content')

@include('helpers/cover-page', [
        'title' => 'FAQ - Frequently asked question', 
        'description' => 'Domande frequenti sui contenuti venduti e le modalità di acquisto',
        'url' => 'faq-cover.jpg'])

<div class="container flex-columns">
    @isset($faqs)
            @foreach($faqs as $faq)
                <div class="card-faq">
                    <div class="question-box flex-rows"> 
                        <h2>{{ $faq->domanda }}</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </div>
                    <div class="answer-box">
                        <h2>{{ $faq->risposta }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset

    @empty($faqs)
        <h2>Niente da visualizzare</h2>
    @endempty

</div>

<aside class="right-sidebar">

</aside>
@endsection
