@extends('layouts.public')

@section('page-title', 'FAQ')

@section('page-content')

@include('helpers/cover-page', [
        'title' => 'FAQ - Frequently asked question', 
        'description' => 'Domande frequenti sui contenuti venduti e le modalità di acquisto',
        'img_url' => '../storage/app/public/images/covers/faq-cover.jpg'])

<div class="container flex-columns">
@can('isAdmin')
<div style = "display:flex; justify-content: center;">
    {{ link_to_route('inserisciFaq', 'AGGIUNGI FAQ', $parameters = [],['class'=>'user-btn','style' => 'width: 180px;'] )}}
    </div>
@endcan
@if(count($faqs) == 0)
<br>
<br>
<div style = " display: flex;
    justify-content: center;">
<h2>NON SONO PRESENTI FAQ</h2>
</div>
@endif
    @isset($faqs)
        <ol id="faq-list">
            @foreach($faqs as $faq)
                <li >
                   <div class="item-faq">
                    <div class="card-faq">
                        <u><h2>Domanda:</h2></u>
                        <p>{{ $faq->domanda }}</p>
                    </div>
                    <div class="answer-box">
                        <u><h2>Risposta:</h2></u>
                        <p>{{ $faq->risposta }}</p>
                    </div>
                  
                    @can('isAdmin')  
                    <div>
                    {{ link_to_route('modificaFaq', 'MODIFICA FAQ', $parameters = ['faqId' => $faq->faqId], ['class'=>'user-btn'] )}}
                    </div>
                    <div>
                    {!!  Form::open(['action' => ['AdminController@eliminaFaq', $faq->faqId] , 'files' => true, 'method'=>'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA FAQ', ['class'=>'user-btn'])!!}
                    {!!  Form::close()  !!}
                   
                    </div>
                    @endcan
                        
                    </div> 
                </li>
           
            @endforeach
            
        
   
        </ol>
@endisset
    </div>


@endsection
