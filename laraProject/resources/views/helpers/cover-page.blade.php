@php
    if(empty($url))
        $url = "default.png"
@endphp

@isset($event)

@endisset

@empty($event)
<div class="cover-page"> 
    <img id="cover-img" src="{{ asset($img_url) }}"/>
    <div class="overlay-content flex-center">
        <div class="container">
            <div class="content-cover">
                <h2>{{ $title }}</h2>
                <h3>{{ $description }}</h3>
            </div>
        </div>
    </div>
</div>
@endempty