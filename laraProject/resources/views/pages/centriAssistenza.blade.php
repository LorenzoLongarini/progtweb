@extends('layouts.public')

@section('page-title', 'Centri Assistenza')
<div class="map-container">
<div id="map"></div>
<div class="text-ca">
    <div id="ca-image" class="img-ca"></div>
<div id="info_div"></div>
</div>
</div>


<script>
    function initMap() {
        var myMapCenter = {lat: 42.57860, lng: 12.41839};
    
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myMapCenter,
            zoom: 6
        });
    
    
        function markStore(storeInfo){
            var marker = new google.maps.Marker({
                map: map,
                position: storeInfo.location,
                title: storeInfo.name

            });

            marker.addListener('click', function(){
                showStoreInfo(storeInfo);
                google.maps.event.clearListeners(marker, 'click');
            });
           
        }
        function showStoreInfo(storeInfo){
            var info_div = document.getElementById('info_div');
            var img = document.createElement("img");
            var src = document.getElementById("ca-image");
            img.src = "../public/images/white.jpg";
            src.appendChild(img);

            

           
            

                
            
               
            

                

            info_div.innerHTML = 'Store name: '
                + storeInfo.name
                + '<br>Via: ' + storeInfo.via + '<br>Tel:' + storeInfo.telefono;
        }
    
        var stores = [
            {
                name: 'DL Computers',
                location: {lat: 45.46168, lng: 9.18547},
                via: 'Torino',
                telefono:'32043040594'
            },
            {
                name: 'DL Computers',
                location: {lat: 41.90336, lng: 12.47949},
                via: 'Del Corso',
                telefono:'239349'

                
            },
          
        ];
    
        stores.forEach(function(store){
            markStore(store);
        });
    
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9HtQuq71WPTBMkczWqBDZesO_xaUyv8&callback=initMap" async defer></script>


  
    


