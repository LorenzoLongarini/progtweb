<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class="container flex">
        <aside id="user-nav">
            <ul>
                <li><a href="visualizza-dati.php">Dati utente</a></li>
                <li><a href>Modifica dati utente</a></li>
                <li><a href="storico-acquisti.php">Storico transazioni</a></li>
            </ul>
        </aside>
        <section style="width: fit-content" id="user-section">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Nome">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Cognome">
            <input type="date" value="" maxlength="20" rows="1" >
            <input type="text" value="" maxlength="20" rows="1" placeholder="Password">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Nome">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Nome">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Nome">
            <input type="submit" value="Modifica">
            <input type="reset" value="Annulla">
        </section>
    </div>
</main>
</body>
</html>