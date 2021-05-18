<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class="container flex">
    <aside id="user-nav">
        <a href>Dati utente</a>
        <a href>Modifica dati utente</a>
        <a href>Storico transazioni</a>
    </aside>
    <section style="width: fit-content" id="user-section">
    <input type="text" value="Nome">
    <input type="submit" value="Submit">
    <input type="reset" value="Annulla">
    </section>
    </div>
</main>
</body>
</html>