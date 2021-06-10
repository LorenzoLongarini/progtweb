@extends('layouts.public', ['footerVisible' => false, 'headerVisible' => false])
@section('page-content')
<div class="acquisto-confermato">
   <div style="text-align:center; padding: 30px">
        <svg id="check-pagamento" xmlns="http://www.w3.org/2000/svg"  width="250px" class="bi bi-check2-circle" viewBox="0 0 16 16">
             <path fill="#01da05" d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
             <path fill="#01da05"d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
        </svg>
    </div>
    <div class="flex-center" ><span style="font-weight:bolder">PAGAMENTO CONFERMATO</div>
<br>
    <div class="flex-center"> Puoi trovare i biglietti acquistati nel tuo storico.</div>
    <br>
<div class="flex-center">Ti ringraziamo per aver acquistato con EasyTicket</div>
<br>
<div class="flex-center"> <a href="{{route('home')}}" >Clicca qui per tornare alla home.</a></div>
</div>
@endsection