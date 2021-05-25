@extends('layouts.public')

@section('insert-event')

    <main id="page-content">
    <div class="container flex-rows" >
        <aside id="user-nav">
            <ul>
                <li class="user-nav-link">
                    <button onclick="activeUtente()"id="utente" class="user-nav-btn ">Crea Evento</button>
                </li>
                <li class="user-nav-link">
                    <button onclick="activeStorico()" id="storico" class="user-nav-btn  ">Modifica Evento</button>
                </li>
                <li class="user-nav-link">
                    <button onclick="activeStorico()" id="storico" class="user-nav-btn  ">Cancella Evento</button>
                </li>
                <li class="user-nav-link">
                    <button onclick="activeStorico()" id="storico" class="user-nav-btn  ">Statistiche</button>
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
            <input type="text" value="" maxlength="20" rows="1" placeholder="Titolo">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Prezzo">
            </p>
            <p>
            <input type="text" value="" maxlength="20" rows="1" placeholder="Artista">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Luogo">
            </p>
            <p>
            <input type="text" value="" maxlength="20" rows="1" placeholder="Regione">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Biglietti Disponibili">
            </p>
            <p>
            <input type="text" value="" maxlength="20" rows="1" placeholder="Prezzo">
            <input type="date" value="" maxlength="20" rows="1" >
            </p>
            <p>
            <input type="text" value="" maxlength="10" rows="1" placeholder="Sconto">
            <input type="file" value="" maxlength="15" rows="1" placeholder="Immagine">
            </p>
            <p>
            <input type="text" value="" rows="5" cols = "5" placeholder="Descrizione" id = "boxtesto">
            </p>
            <p>
            <input type="submit" value="Modifica" id = "submit">
            <input type="reset" value="Annulla">
            </p>
        </section>
    </div>
</main>


@endsection

@yield('insert-event')