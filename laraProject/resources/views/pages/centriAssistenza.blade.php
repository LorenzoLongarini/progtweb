@extends('layouts.public')
@php
 use App\Models\Resources\AssistenceCenter;

 $centers= AssistenceCenter::all();
    
@endphp
@section('page-title', 'Centri Assistenza')
<div class="centers-container">
<div class="title-centers"><h3>I NOSTRI CENTRI DI ASSISTENZA</h3></div>
<div  style="height: 800px;width:100%;margin-top:100px;display:flex;flex-direction:column;justify-content:space-between;align-items:center">
    @foreach ($centers as $center)
    <div class="center">
        <div class="center-name"><div style="font-size: 30px;font-weight:700"><h3>{{$center->nome}} </h3></div>
        <div class="divider-center"></div>
    </div>
        
        <div class="center-desc">
        <div><h4 style="font-size: 20px;color:black;font-weight:700">{{$center->centersId}}</h4></div>
        <div><h4 style="font-size: 20px;color:black;font-weight:700">{{$center->regione}}</h4></div>
        <div><h4 style="font-size: 15px;color:black;font-weight:700">{{$center->città}}</h4></div>
        <div><h4 style="font-size: 15px;color:black;font-weight:700">{{$center->via}}</h4></div>
        <div>{{$center->telefono}}</div>
        <div>{{$center->email}}</div>
        </div>
    </div>
    @endforeach
</div>


</div>
    







<!--
<div class="map-container">
<div id="map"></div>
<div class="text-ca">
   <h3 id="intro-text" style="display:block;margin-top:50px">CLICCA SUL CENTRO ASSISTENZA PIU' VICINO A TE!</h3>
<div id="text-container">
    <div id="img-container" style="display:none">
       <img style="max-width: 100%" id="img-map" src="" alt="">
    </div>
    <h3 id="info_div" style="gap:10px"></h3>
</div>
</div>
</div>



<script>
    function initMap() {
        var mapCA = {lat: 42.57860, lng: 12.41839};
    
        var map = new google.maps.Map(document.getElementById('map'), {
            center: mapCA,
            zoom: 6
        });
    
    
        function markCenter(center){
            var marker = new google.maps.Marker({
                map: map,
                position: center.location,
                title: center.name

            });

            marker.addListener('click', function(){
                showCenter(center);
                
            });
           
        }
        function showCenter(center){
            var info_div = document.getElementById('info_div');
            var intro= document.getElementById("intro-text");
            var imgMap = document.getElementById("img-map");
            var imgCont = document.getElementById("img-container");
            intro.style.display="none";
            imgCont.style.display="block";
           
            info_div.innerHTML = 'Store name: '+ center.name + '<br>Via: ' + center.via + 
            '<br>Tel:' + center.telefono + '<br>Mail:' + center.mail
            + '<br>Responsabile:'+ center.responsabile + '<br>Orario di apertura:' + center.orario;
            imgMap.src=center.img;
        }
    
        var centers = [
            {
                name: 'DL Computers',
                location: {lat: 45.46168, lng: 9.18547},
                via: 'Torino',
                telefono:'32043040594',
                mail:'info@centro.it',
                responsabile:'Carlo',
                orario:'8.00-17.00',
                img:'../public/images/white.jpg'

            },  
            {
                name: 'DL Computers',
                location: {lat: 41.90336, lng: 12.47949},
                via: 'Del Corso',
                telefono:'324239349',
                mail:'info@centro.it',
                responsabile:'Luca',
                orario:'8.00-16.00',
                img:'../public/images/white.jpg'

                
            },
          
        ];
    
        centers.forEach(function(center){
            markCenter(center);
        });
    
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9HtQuq71WPTBMkczWqBDZesO_xaUyv8&callback=initMap" async defer></script>
-->

  
    


