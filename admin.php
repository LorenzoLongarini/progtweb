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
        <div>
        <div class = "utenti-liv-2">
            <div class = "row-direction">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">Nome-effettivo</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Cognome</div>
            <div style="margin-left:30px; margin-top:10px;">Cognome-effettivo</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">UtenteId-effettivo</div>
            </div>
            <div>
            <a class = "elimina2">Elimina Utente <img src="./img/trash-2.svg" style="width:10%"> </a>
            </div>
            </div>
        </div>

        <div class = "utenti-liv-2">
            <div class = "row-direction">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Ragione Sociale</div>
            <div style="margin-left:30px; margin-top:10px;">Ragione Sociale - effettivo</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">UtenteId</div>
            <div style="margin-left:30px; margin-top:10px;">UtenteId-effettivo</div>
            </div>
            <div>
            <a style = "margin-left:270px" class = "elimina2">Elimina Utente <img src="./img/trash-2.svg" style="width:10%"> </a>
            </div>
            </div>
        </div>
        </div>
</main>
</body>



</html>