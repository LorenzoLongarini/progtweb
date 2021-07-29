@php
    if(empty($url))
        $url = "default.png"
@endphp

@empty($event)
<div class="cover-page" style="position: relative"> 
    <img id="cover-img" src="{{ asset($img_url) }}"/>
    <div class="overlay-content flex-center">
        <div class="container">
            <div class="content-cover">
                <h2 class="title">{{ $title }}</h2>
                <h3>{{ $description }}</h3>
            </div>
        </div>
    </div>
</div>
@endempty