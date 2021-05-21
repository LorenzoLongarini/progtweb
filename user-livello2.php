<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
        <div class="container user flex-rows">
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
                <input type="text" value="Nome">
                <input type="submit" value="Submit">
                <input type="reset" value="Annulla">
            </section>
        </div>
    </main>
</body>
</html>