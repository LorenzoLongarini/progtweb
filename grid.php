<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">

    <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./img/Immagine-slider1.png" style="width: 1%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./img/Immagine-slider2.png" style="width:1%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./img/Immagine-slider3.png" style="width:1%">
  <div class="text">Caption Three</div>
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

    <div class="container-grid">
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
    </div>
    <div class="container-grid">
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
    </div>
    <div class="container-grid">
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
        <div class="faces">
            <img src="./img/immagine-grid.png" alt="">
        </div>
    </div>

    
</main>
<?php require ('./template-parts/static/front/footer.php')?>
</body>
</html>