<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class="container flex">
        <aside id="user-nav">
            <ul class="lista">
                <li><a href>Dati utente</a></li>
                <li><a href="modifica-dati.php">Modifica dati utente</a></li>
                <li><a href="storico-acquisti.php">Storico transazioni</a></li>
            </ul>
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
        </section>
    </div>
</main>
</body>
</html>