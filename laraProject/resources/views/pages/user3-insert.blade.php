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
        <form method = "post" action ="{{route('user3-insert.store')}}">
            @csfr
            <p>
            <div>
            <input type="text" id="titolo" value="{{old('titolo')}}" maxlength="20" rows="1" placeholder="Titolo">
            @if($errors->firs('titolo'))
                <ul class="errors">
                    @foreach ($errors->get('titolo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                </div>
            <input type="text" id="prezzo" value="{{old('prezzo')}}" maxlength="20" rows="1" placeholder="Prezzo">
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
        </form>
        </section>
        <div class="storico" id="storico-user">
            <div class="acquisto">acquisto</div>
            <div class="acquisto">acquisto</div>
            <div class="acquisto">acquisto</div>
            <div class="acquisto">acquisto</div>

        </div>
    </div>
</main>
<script>

    function activeUtente(){
       var elem=document.getElementById("utente");
       var elem1=document.getElementById("storico");
       var storico=document.getElementById("storico-user");
       var utente=document.getElementById("user-section");

        if(elem.classList.contains("active"))
            utente.style.display="none";
        else
            utente.style.display="block";
            storico.style.display="none";
       
        if(elem.classList.contains("active"))
            elem.classList.remove("active");

        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            

      
    }


</script>
<script>

function activeStorico(){
       var elem=document.getElementById("storico");
       var elem1=document.getElementById("utente");
       var storico=document.getElementById("storico-user");
       var utente=document.getElementById("user-section");
       

        if(elem.classList.contains("active"))
            storico.style.display="none";
        else
            storico.style.display="block";
            utente.style.display="none";
           


        if(elem.classList.contains("active"))
           elem.classList.remove("active");
        else 
            elem.classList.add("active");
            elem1.classList.remove("active");
            
           
    }

</script>


@endsection

@yield('insert-event')