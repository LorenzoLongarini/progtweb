<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class="container flex-rows">
        <aside id="user-nav">
            <ul>
                <li class="user-nav-link">
                    <button onclick=""id="dashboard" class="user-nav-btn active">Dashboard</button>
                    <h3></h3>
                </li>
                <li class="user-nav-link">
                    <button onclick="activeStorico()" id="storico" class="user-nav-btn  ">Storico acquisti</button>
                </li>
                <li class="user-nav-link">
                    <button  onclick="activeSettings()"id="impostazioni-utente" class="user-nav-btn ">Impostazioni utente</button>
                </li>
            </ul>
        </aside>
        <div class="user-nav-separator"></div>

        <section class="#" style="width: fit-content" id="user-section">
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
    </div>
</main>
</body>
<script>
/*
    function activeDashboard(){
        var elem=document.getElementById("dashboard");
       var elem1=document.getElementById("storico");
       var elem2=document.getElementById("impostazioni-utente");
        var elem3=document.getElementById("user-section");

        if(elem.classList.contains("active"))
            elem3.style.display="none"
        else
            elem3.style.display="block";



        if(elem.classList.contains("active"))
            elem3.style.display="block";
           
           

        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            elem2.classList.remove("active");
            
           
           
    }

*/




</script>
<script>

function activeStorico(){
        var elem=document.getElementById("storico");
       var elem1=document.getElementById("dashboard");
       var elem2=document.getElementById("impostazioni-utente");

        if(elem.classList.contains("active"))
           elem.classList.remove("active");
        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            elem2.classList.remove("active");
           
    }
*/
</script>
<script>
    
function activeSettings(){
        var elem=document.getElementById("impostazioni-utente");
       var elem1=document.getElementById("dashboard");
       var elem2=document.getElementById("storico");

        if(elem.classList.contains("active"))
           elem.classList.remove("active");
        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            elem2.classList.remove("active");
}

</script>
</html>