@extends('layouts.public')

@section('page-title', 'Homepage')

@section('content')

<main id="page-content">

    <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="{{ asset('../storage/app/public/images/grid-event1.jpg') }}" style="width: 100%">
  <div class="text"></div>
  </div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="{{ asset('../storage/app/public/images/grid-event2.jpg') }}" style="width: 100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="{{ asset('../storage/app/public/images/grid-event3.jpg') }}" style="width: 100%">
  <div class="text"></div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="info-elements">
    <div class="container-img-grid"><img src="{{ asset('../storage/app/public/images/img_events/info1.000.jpg') }}" alt="">
    </div>
<div class="info-nav-separator"></div>
    <div class="container-img-grid"><img src="./img/info2.000.jpg" >
    
</div>
<div class="info-nav-separator"></div>
    <div class="container-img-grid"><img src="./img/grid.info3.jpg" alt="">
</div>
</div>
<div class="event-nav-separator"></div>
    <div class="div-nav-scroll">
    <nav id="event-nav">
        <ul>
            <li class="user-nav-link">
                <button class="user-nav-btn active">Tendenza</button>
                </li>
            <li class="user-nav-link">
                 <button class="user-nav-btn">Più venduti</button>
                </li>
        </ul>
    </nav>
</div>
     <div class="container-grid">
        <div class="card">

                <img src= "{{ asset('../storage/app/public/images/slides/grid-event3.jpg') }}" alt="Avatar" style="width:100%">
                <div class="middle">
                    <div class="text">Evento</div>
                </div>
        </div>
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                     <div class="text">Evento</div>
                </div>
        </div>
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                <div class="text">Evento</div>
                </div>
        </div>
      </div>
      <div class="container-grid">
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                    <div class="text">Evento</div>
                </div>
        </div>
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                     <div class="text">Evento</div>
                </div>
        </div>
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                <div class="text">Evento</div>
                </div>
        </div>
      </div>
      <div class="container-grid">
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                    <div class="text">Evento</div>
                </div>
        </div>
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                     <div class="text">Evento</div>
                </div>
        </div>
        <div class="card">
                <img src="./img/40x40.png" alt="Avatar" style="width:100%">
                <div class="middle">
                <div class="text">Evento</div>
                </div>
        </div>
      </div>
</main>

@endsection