@extends('layouts.public')

@section('page-title', 'Centri Assistenza')
<div class="map-container">
<div id="map"></div>
<div class="text-ca">
   <h3 id="intro-text" style="display:block;margin-top:50px">CLICCA SUL CENTRO ASSISTENZA PIU' VICINO A TE!</h3>
<div id="text-container">
    <div id="img-container">
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
                showStoreInfo(center);
                
            });
           
        }
        function showCenter(center){
            var info_div = document.getElementById('info_div');
            var intro= document.getElementById("intro-text");
            var imgMap = document.getElementById("img-map");
            intro.style.display="none";
            /*
            img.src = "../public/images/white.jpg";
            if(src.contains(img))
            info_div.innerHTML = 'Store name: '+ storeInfo.name + '<br>Via: ' + storeInfo.via + '<br>Tel:' + storeInfo.telefono;
            else
            src.appendChild(img);*/
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
    
        stores.forEach(function(store){
            markCenter(store);
        });
    
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9HtQuq71WPTBMkczWqBDZesO_xaUyv8&callback=initMap" async defer></script>


  
    


