<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header-users.php")?>
    <main id="page-content">
    <div class="container flex-rows" >
        <aside id="user-nav">
            <ul>
                <li class="user-nav-link">
                    <button onclick="activeUtente()"id="utente" class="user-nav-btn ">Dati personali</button>
                    <h3></h3>
                </li>
                <li class="user-nav-link">
                    <button onclick="activeStorico()" id="storico" class="user-nav-btn  ">Storico acquisti</button>
                </li>
                <!--
                <li class="user-nav-link">
                    <button  onclick="activeSettings()"id="impostazioni-utente" class="user-nav-btn "></button>
                </li>
                -->
            </ul>
        </aside>
        <div class="user-nav-separator"></div>

        <section class="#" style="width:fit-content;display:none" id="user-section" >
            <p>
            <input type="text" value="" maxlength="20" rows="1" placeholder="Nome">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Cognome">
            </p>
            <p>
            <input type="date" value="" maxlength="20" rows="1" >
            </p>
            <p>
            <input type="text" value="" maxlength="10" rows="1" placeholder="Telefono">
            <input type="text" value="" maxlength="15" rows="1" placeholder="Email">
            </p>
            <p>
            <button>Modifica</button>
            <button>Annulla</button>
            </p>
        </section>
        
        <div class="storico" id="storico-user">
            <div class="acquisto">acquisto</div>
            <div class="acquisto">acquisto</div>
            <div class="acquisto">acquisto</div>
            <div class="acquisto">acquisto</div>

        </div>
    </div>
</main>
</body>
<script>

    function activeUtente(){
        var elem=document.getElementById("utente");
       var elem1=document.getElementById("storico");
       var storico=document.getElementById("storico-user");
       var utente=document.getElementById("user-section");

        if(elem.classList.contains("active"))
            utente.style.display="none";
        else
            utente.style.display="block";
            storico.style.display="none";
       
        if(elem.classList.contains("active"))
            elem.classList.remove("active");

        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            

      
    }


</script>
<script>

function activeStorico(){
        var elem=document.getElementById("storico");
       var elem1=document.getElementById("utente");
       var storico=document.getElementById("storico-user");
       var utente=document.getElementById("user-section");
       

        if(elem.classList.contains("active"))
            storico.style.display="none";
        else
            storico.style.display="block";
            utente.style.display="none";
           


        if(elem.classList.contains("active"))
           elem.classList.remove("active");
        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            
           
    }

</script>


</html>