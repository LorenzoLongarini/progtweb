@extends('layouts.public')

@section('modifica-dati-content')
<main id="page-content">
    <div class="container flex-rows">
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
        <form class = "" id = "modify-data" name="mod-data" enctype = "multipart/form-data" method = "post" action
         ="{{ route('modifyData.store') }}">
         @csfr
        <div class="user-nav-separator"></div>
        <section style="width: fit-content" id="user-section">
            <p>
            <input type="text" maxlength="20" rows="1" placeholder="Nome" id="nome" value="{{ old('nome') }}">
            <input type="text" value="" maxlength="20" rows="1" placeholder="Cognome" id="cognome" value="{{ old('cognome') }}">
            </p>
            <p>
            <input type="date" value="" maxlength="20" rows="1" id="date" value="{{ old('date') }}">
            </p>
            <p>
            <input type="text" value="" maxlength="10" rows="1" placeholder="Telefono" id="tele" value="{{ old('tele') }}">
            <input type="text" value="" maxlength="15" rows="1" placeholder="Email" id="email" value="{{ old('email') }}">
            </p>
            <p>
            <input type="submit" value="Modifica">
            <input type="reset" value="Modifica">
            </p>
        </section>
    </div>
</main>
@endsection