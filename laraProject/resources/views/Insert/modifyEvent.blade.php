@extends('layouts.public')



{{  Form::open(array('route' => /*nome-rotta*/, 'id' => /*nome-funzione*/, 'files' => true, 'class' => /*some-bollocks*/))  }}
   
   <div>
    {{  Form:label ('titolo', 'Nome Evento', /*class-type*/)}}
    {{  Form:text ('titolo', '', /*class-type*/)  }}
    </div>

    <div>
    {{  Form:label ('artista', 'Artista', /*class-type*/)  }}
    {{  Form:text ('artista', '', /*class-type*/)  }}
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
    {{  Form:integer ('prezzo', '', /*class-type*/) }}

    </div>
    <div>
    {{  Form:label ('sconto', 'Sconto', /*class-type*/ )}}
    {{  Form:tinyinteger ('sconto', '', /*class-type*/) }}

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
    {{  Form:submit ('Conferma', /*class-type*/)}}
    </div>
{{Form::close}}