<!DOCTYPE html>
<html lang="en">
<?php require("head.php")?>

<body>
<?php require("./template-parts/static/front/header.php")?>
<div class="hero"> 
    
    <div class="hero-content">
        <!--
        <div class="text-hero">
        <h2>Tour Artista</h2>
        <h3>20 gen 2023 </h3>
        <h3>h 22:30</h3>
        <h4>Evento organizzato da: Eventi S.R.L.</h4>
        </div>
        <div class="btn-hero">
            <div class="heart-btn">
           <i onclick="heartButton()"id= "heart" class="fa fa-heart"></i>
            
        </div>
</div>
-->
        
    </div>
</div>
</body>
<script>
   
    function heartButton(){

           let elem=document.getElementById("heart");
           
           if(elem.style.color=="red")
                elem.style.color="black";
            else
                elem.style.color="red";

        
           
           
          
          
    }

</script>
</html>