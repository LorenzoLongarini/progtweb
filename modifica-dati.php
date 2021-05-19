<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class="container flex">
        <aside id="user-nav">
            <div class = "aside">
                <ul class="lista">
                <li class="elem-list"><a href="visualizza-dati.php">Dati utente</a></li>
                <li><a href>Modifica dati utente</a></li>
                <li><a href="storico-acquisti.php">Storico transazioni</a></li>
                </ul>
            </div>
        </aside>
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