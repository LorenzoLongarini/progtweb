@extends('layouts.public')



{{  Form::open(array('route' => 'aggiungiEvento.store', 'id' => /*nome-funzione*/, 'files' => true, 'class' => /*some-bollocks*/))  }}
   
   <div>
    {{  Form:label ('name', 'Titolo', /*class-type*/)}}
    {{  Form:text ('name', '', /*class-type*/)  }}
    </div>

    <div>
    {{  Form:label ('artista', 'Artista', /*class-type*/)  }}
    {{  Form:text ('artista', '', /*class-type*/)  }}
    </div>

    <div>
    {{  Form:label ('immagine', 'Artista', /*class-type*/)  }}
    {{  Form:image ('immagine', '', /*class-type*/)  }}
    </div>

    <div>

    {{  Form:label ('luogo', 'Luogo', /*class-type*/)}}
    {{  Form:text ('luogo', '', /*class-type*/)  }}

    </div>
    <div>
    {{  Form:label ('regione', 'Regione', /*class-type*/)}}
    {{  Form:select ('regione', $regione, '', /*class-type*/)  }
    
    </div>
    <div>
    {{  Form:label ('data', 'Data', /*class-type*/)}}
    {{  Form:date ('data', '',  /*class-type*/ ) }}
    </div>
    <div>
    {{  Form:label ('BigliettiDisp', 'Biglietti Disponibili', /*class-type*/ )}}
    {{  Form:integer ('BigliettiDisp', '', /*class-type*/) }}

    </div>
    <div>
    {{  Form:label ('prezzo', 'Prezzo Biglietto', /*class-type*/ )}}
    {{  Form:text ('prezzo', '', /*class-type*/) }}

    </div>
    <div>
    {{  Form:label ('sconto', 'Sconto', /*class-type*/ )}}
    {{  Form:text ('sconto', '', /*class-type*/) }}

    </div>
    <div>

    {{  Form:label ('descBreve', 'Descrizione Breve', /*class-type*/)}}
    {{  Form:text ('descBreve', '', /*class-type*/)}}

    </div>
    <div>

    {{  Form:label ('programma', 'Descrizione Completa', /*class-type*/)}}
    {{  Form:textarea ('programma', '',  /*class-type*/)}}

    </div>


    <div>

    {{  Form:label ('location', 'Url', /*class-type*/)}}
    {{  Form:text ('location', '', /*class-type*/)  }}

    </div>

    <div>
    {{  Form:submit ('Conferma', /*class-type*/)}}
    </div>

    <div>
    {{  Form:reset ('Annulla', /*class-type*/)}}
    </div>
{{Form::close}}