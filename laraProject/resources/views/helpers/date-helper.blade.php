@php 
    $timestamps = strtotime($eventDate);   
@endphp

<h4>{{date('d/m/Y', $timestamps)}} , ore {{date('H:i', $timestamps)}}<h4>