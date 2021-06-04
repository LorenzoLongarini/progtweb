@php
    $visibilityClass;
    if(isset($searchBtn) && $searchBtn == false)
        $visibilityClass = "hidden";
@endphp

<div id="search-btn" class="header-link-icon {{$visibilityClass ?? ''}}" title="Cerca nel catalogo">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
</div>

<div id="search-box-overlay" class="flex-rows">
    <div id="search-form" class="form card container">
        <h1>Cerca nel catalogo</h1>
        @include('inserts.ricercaEventi')
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" id="close-search-box" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
    </div>
</div>