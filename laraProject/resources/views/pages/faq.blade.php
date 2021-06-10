@extends('layouts.public')

@section('page-title', 'FAQ')

@section('page-content')

@include('helpers/cover-page', [
        'title' => 'FAQ - Frequently asked question', 
        'description' => 'Domande frequenti sui contenuti venduti e le modalità di acquisto',
        'img_url' => '../storage/app/public/images/covers/faq-cover.jpg'])

<div class="container flex-columns">
@can('isAdmin')
    {{ link_to_route('inserisciFaq', 'AGGIUNGI FAQ')}}
@endcan

    @isset($faqs)
        <ol id="faq-list">
            @foreach($faqs as $faq)
                <li>
                    <div class="event-right">
                    @can('isAdmin')  
                    {{ link_to_route('modificaFaq', 'MODIFICA FAQ', $parameters = ['faqId' => $faq->faqId], ['class'=>'default-btn'] )}}
                    {!!  Form::open(['action' => ['AdminController@eliminaFaq', $faq->faqId] , 'files' => true, 'method'=>'POST'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA FAQ', ['class'=>'delete'])!!}
                    {!!  Form::close()  !!}
                    @endcan

                        </div>
                    <div class="card-faq">
                        <h2>{{ $faq->domanda }}</h2>
                    </div>
                    <div class="answer-box">
                        <p>{{ $faq->risposta }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    @endisset
    @empty($faqs)
        <h2>Niente da visualizzare</h2>
    @endempty
</div>
@endsection
