@php
    if (empty($imgName)) {
        $imgName = 'default.jpg';
    }   
@endphp

<img src="{{ asset('..\\storage\\app\\public\\images\\img_events\\') . $imgName}}">