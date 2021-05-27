<!DOCTYPE html>
<html lang="en">
<?php require ("head.php")?>
<body>
    <?php require ("./template-parts/static/front/header.php")?>
    <main id="page-content">
    <div class = "contienitutto">
    <div display="flex" justify-content="center">
        <div class="cont-riepilogo">
        <h3>Riepilogo</h3>
    </div>
    <div>
        <a>Elimina Ordine</a>
    </div>
    <div class = "pagamento-line"></div>
    
            <div class="event">
                <div class="event-left">
                    <div class="img-event">
                        <h3>Immagine</h3>
                    </div>
                    <div class="event-info flex-columns">
                        <h2>Tour Artista</h2>
                        <h4>17 giu 2022</h4>
                        <h4>Milano San Siro</h4>
                    </div>
                </div>
                <div class="event-right">
                    <h4 class="price">€ 32,90</h4>
                </div>
</div>
<div class = "pagamento-line"></div>
    <div>
    <div>
        <h5>Quantità</h5>
    </div>
    <div>
            <select >
            <option value="">----</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            </select>
    </div>
    </div>
    <div>
    <h3 class="notice">
                Applicato sconto del 15%
            </h3>
    </div>
    <div class = "pagamento-line"></div>
    <div>
</div>

   
        <h5>Totale</h5>
    </div>
    <div>
    <div>
        <h3>Metodo di pagamento</h3>
    </div>
    <div>
    <section style="width: fit-content" id="user-section">
            <p>
            <input type="text" value="" maxlength="20" rows="1" placeholder="Nome Titolare">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Cognome Titolare">
            </p>
            <p>
            <input type="text" value="" maxlength="20" rows="1" placeholder="Codice Fiscale">
            <input type="text" value="" maxlength="10" rows="1" placeholder="Numero Carta">
            </p>
            <p>
            <input type="text" value="" maxlength="10" rows="1" placeholder="CVV">
            <input type="text" value="" maxlength="15" rows="1" placeholder="Scadenza">
            </p>
            <button class="btn default-btn">Acquista</button>
        </section>
    </div>
    </div>
    </div>
        
</main>
</body>
</html>