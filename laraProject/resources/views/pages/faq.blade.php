@extends('layouts.public')

@section('faq-content')
<div class="hero flex-center" style="background-image: linear-gradient(0deg, rgba(0,0,0,.8), rgba(0,0,0,0.6)),url('{{asset ('/images/faq-cover.jpg')}}');background-position:center center;background-size:cover"> 
    <div class="container flex-rows">
        <div class="content-hero">
           <h2>FAQ - Frequently asked questions</h2>
            <h3>Prova a cercare qui le risposte alle tue esigenze prima di contattarci.</h3>
        </div>
    </div>
</div>
@endsection
