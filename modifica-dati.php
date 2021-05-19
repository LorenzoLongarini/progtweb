<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class="container flex">
        <aside id="user-nav">
                <ul>
                  <li class="user-nav-link">
                        <button class="user-nav-btn active">Dashboard</button>
                    </li>
                    <li class="user-nav-link">
                        <button class="user-nav-btn">Storico acquisti</button>
                    </li>
                    <li class="user-nav-link">
                        <button class="user-nav-btn">Impostazioni utente</button>
                    </li>
                </ul>
        </aside>
        <div class="user-nav-separator"></div>
        <section style="width: fit-content" id="user-section">
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
</html>