

@php
        if (empty($imgFile)) {
            $imgFile = 'default.png';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ asset('images/products/' . $imgFile) }}" style = "max-width: 100%;
    height: auto;"{!! $attrs !!}>